<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('targets', function (Blueprint $table) {
            // First, transfer existing data if needed
            if (Schema::hasColumn('targets', 'cms_type')) {
                DB::statement('
                    INSERT INTO website_technologies (target_id, has_cms, cms_name, cms_version, created_at, updated_at)
                    SELECT 
                        id as target_id,
                        CASE WHEN cms_type IS NOT NULL THEN true ELSE false END as has_cms,
                        cms_type as cms_name,
                        cms_version,
                        NOW() as created_at,
                        NOW() as updated_at
                    FROM targets
                    WHERE cms_type IS NOT NULL
                ');

                // Then remove the columns
                $table->dropColumn(['cms_type', 'cms_version']);
            }
        });
    }

    public function down()
    {
        Schema::table('targets', function (Blueprint $table) {
            $table->string('cms_type')->nullable();
            $table->string('cms_version')->nullable();
        });
    }
};
