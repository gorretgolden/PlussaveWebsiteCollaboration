<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDetailItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_detail_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_detail_id');
            $table->string('title');
            $table->string('item');
            $table->string('icon')->nullable();
            $table->timestamps();
            $table->foreign('service_detail_id')->references('id')->on('service_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_detail_items');
    }
}
