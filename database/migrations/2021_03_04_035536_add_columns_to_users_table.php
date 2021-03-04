<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('persona_id')
                ->after('id');
            $table->unsignedBigInteger('role_id')
                ->after('persona_id');
            $table->unsignedBigInteger('empresa_id')
                ->after('role_id');

            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('empresa_id')->references('id')->on('empresas');
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
            $table->dropColumn('persona_id', 'empresa_id', 'role_id');
        });
    }
}
