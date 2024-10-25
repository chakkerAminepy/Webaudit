<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Target extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'url',
        'domain',
        'scheme',
        'ip_address',
        'server_type',
        'status',
        'last_scan_date',
        'http_status',
        'title',
        'description',
        'robots_txt',
        'sitemap_xml',
        'ssl_info',
        'headers',
        'redirect_chains',
        'crawl_depth',
        'max_pages_to_crawl',
        'crawl_user_agent',
        'exclude_urls',
        'include_urls',
        'scan_frequency',
        'scan_priority',
        'notifications_enabled',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'ssl_info' => 'array',
        'headers' => 'array',
        'technologies' => 'array',
        'redirect_chains' => 'array',
        'exclude_urls' => 'array',
        'include_urls' => 'array',
        'last_scan_date' => 'datetime',
        'notifications_enabled' => 'boolean',
    ];

    // Relationships
    public function technology()
    {
        return $this->hasOne(WebsiteTechnology::class);
    }
    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeDueForScan($query)
    {
        return $query->where('last_scan_date', '<=', now()->subHours(24));
    }

    // Methods
    public function getFullUrlAttribute()
    {
        return $this->scheme . '://' . $this->domain;
    }

    public function isSecure()
    {
        return $this->scheme === 'https';
    }

    public function shouldExclude($url)
    {
        return collect($this->exclude_urls)->contains(function ($pattern) use ($url) {
            return str_is($pattern, $url);
        });
    }

    public function shouldInclude($url)
    {
        if (empty($this->include_urls)) {
            return true;
        }

        return collect($this->include_urls)->contains(function ($pattern) use ($url) {
            return str_is($pattern, $url);
        });
    }

    public function updateScanStatus($status)
    {
        $this->update([
            'status' => $status,
            'last_scan_date' => now(),
        ]);
    }
}
