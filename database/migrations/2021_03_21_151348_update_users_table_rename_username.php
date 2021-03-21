<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTableRenameUsername extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('start_deposit');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
            $table->double('start_deposit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('start_deposit');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('username');
            $table->double('start_deposit');
        });
    }
}
