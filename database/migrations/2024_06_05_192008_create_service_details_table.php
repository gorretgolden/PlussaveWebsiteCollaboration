<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_type_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->foreign('service_type_id')->references('id')->on('service_types')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_details');
    }
}
