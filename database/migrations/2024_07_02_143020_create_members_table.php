<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name')->nullable();
            $table->text('physical_address')->nullable();
            $table->string('gender');
            $table->string('mobile_number');
            $table->string('other_mobile_number')->nullable();
            $table->date('date_of_birth');
            $table->string('place_of_work')->nullable();
            $table->string('email')->unique();
            $table->string('identification_type'); // Example: NID, Passport, Driving Permit
            $table->string('identification_number');
            $table->string('occupation');
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
        Schema::dropIfExists('members');
    }
}
