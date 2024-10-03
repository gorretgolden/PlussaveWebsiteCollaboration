<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToContactFormSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
     {
         Schema::table('contact_form_submissions', function (Blueprint $table) {
             $table->string('name')->after('id');
             $table->string('email')->after('name');
             $table->string('phone')->after('email');
             $table->text('message')->after('phone');
         });
     }

     public function down()
     {
         Schema::table('contact_form_submissions', function (Blueprint $table) {
             $table->dropColumn('name');
             $table->dropColumn('email');
             $table->string('phone');
             $table->dropColumn('message');
         });
     }
}
