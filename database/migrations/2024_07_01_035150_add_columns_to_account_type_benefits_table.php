<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToAccountTypeBenefitsTable extends Migration
{
    public function up()
    {
        Schema::table('account_type_benefits', function (Blueprint $table) {
            $table->foreignId('account_type_id')->constrained()->onDelete('cascade');
            $table->string('benefit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('account_type_benefits', function (Blueprint $table) {
            $table->dropForeign(['account_type_id']);
            $table->dropColumn('account_type_id');
            $table->dropColumn('benefit');
        });
    }

}
