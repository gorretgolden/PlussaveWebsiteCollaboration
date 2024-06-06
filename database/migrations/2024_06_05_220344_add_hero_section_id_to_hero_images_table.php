<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHeroSectionIdToHeroImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
     {
         Schema::table('hero_images', function (Blueprint $table) {
             $table->foreignId('hero_section_id')
                   ->constrained()
                   ->onDelete('cascade')
                   ->after('id');
         });
     }

     public function down()
     {
         Schema::table('hero_images', function (Blueprint $table) {
             $table->dropForeign(['hero_section_id']);
             $table->dropColumn('hero_section_id');
         });
     }
}
