<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->text('testimonial');
            $table->string('media_type'); // 'image' or 'video'
            $table->string('media_url'); // URL to the media
            $table->string('client_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_testimonials');
    }
}
