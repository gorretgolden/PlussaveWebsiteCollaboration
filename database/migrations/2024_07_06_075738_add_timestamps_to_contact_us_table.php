<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToContactUsTable extends Migration
{
    public function up()
    {
        Schema::table('contact_us', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('contact_us', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
}
