<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WebsiteTechnology extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'target_id',
        'has_cms',
        'cms_name',
        'cms_version',
        'technologies',
        'created_by',
        'updated_by'
    ];

    protected $casts = [
        'has_cms' => 'boolean',
        'technologies' => 'array'
    ];

    // Relationship with Target
    public function target()
    {
        return $this->belongsTo(Target::class);
    }

    // Helper methods
    public function getCmsStatusAttribute()
    {
        return $this->has_cms ? $this->cms_name : 'No CMS';
    }

    public function getFullCmsInfoAttribute()
    {
        if (!$this->has_cms) {
            return 'No CMS';
        }

        return $this->cms_version
            ? "{$this->cms_name} v{$this->cms_version}"
            : $this->cms_name;
    }

    public function addTechnology($technology)
    {
        $technologies = $this->technologies ?? [];
        if (!in_array($technology, $technologies)) {
            $technologies[] = $technology;
            $this->technologies = $technologies;
            $this->save();
        }
    }

    public function removeTechnology($technology)
    {
        $technologies = $this->technologies ?? [];
        $this->technologies = array_values(array_diff($technologies, [$technology]));
        $this->save();
    }
}
