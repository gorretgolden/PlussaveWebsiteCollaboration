<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeToTeamMembersTable extends Migration
{
    public function up()
    {
        Schema::table('team_members', function (Blueprint $table) {
            $table->string('type')->default('member')->after('position');
        });
    }

    public function down()
    {
        Schema::table('team_members', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
}
