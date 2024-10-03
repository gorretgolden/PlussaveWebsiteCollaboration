<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyInstagramPostsTable extends Migration
{
    public function up()
    {
        Schema::table('instagram_posts', function (Blueprint $table) {
            $table->text('media_url')->change();
            $table->text('thumbnail_url')->nullable()->change();
            $table->text('permalink')->change();
        });
    }

    public function down()
    {
        Schema::table('instagram_posts', function (Blueprint $table) {
            $table->string('media_url', 255)->change();
            $table->string('thumbnail_url', 255)->nullable()->change();
            $table->string('permalink', 255)->change();
        });
    }
}
