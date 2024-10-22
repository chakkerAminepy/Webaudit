<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('targets', function (Blueprint $table) {
            $table->id();
            // Basic URL Info
            $table->string('url');
            $table->string('domain');
            $table->string('scheme')->default('https');
            $table->string('ip_address')->nullable();
            $table->string('server_type')->nullable();

            // Status and Scanning Info
            $table->enum('status', ['active', 'inactive', 'scanning', 'error'])->default('active');
            $table->timestamp('last_scan_date')->nullable();
            $table->integer('http_status')->nullable();

            // Meta Information
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('robots_txt')->nullable();
            $table->text('sitemap_xml')->nullable();

            // CMS Information
            $table->string('cms_type')->nullable();
            $table->string('cms_version')->nullable();

            // Technical Details
            $table->json('ssl_info')->nullable();
            $table->json('headers')->nullable();
            $table->json('technologies')->nullable();
            $table->json('redirect_chains')->nullable();

            // Crawling Configuration
            $table->integer('crawl_depth')->default(3);
            $table->integer('max_pages_to_crawl')->default(100);
            $table->string('crawl_user_agent')->nullable();
            $table->json('exclude_urls')->nullable();
            $table->json('include_urls')->nullable();

            // Scheduling and Notifications
            $table->string('scan_frequency')->default('daily');
            $table->integer('scan_priority')->default(1);
            $table->boolean('notifications_enabled')->default(true);

            // Audit Trail
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('domain');
            $table->index('status');
            $table->index('last_scan_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('targets');
    }
};
