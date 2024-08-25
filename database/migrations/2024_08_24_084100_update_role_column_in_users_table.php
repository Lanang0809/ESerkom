<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRoleColumnInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Mengubah kolom role
            $table->enum('role', ['admin', 'mahasiswa', 'other_role'])->default('mahasiswa')->change();
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
            // Mengembalikan kolom role ke definisi sebelumnya
            $table->enum('role', ['admin', 'mahasiswa'])->default('mahasiswa')->change();
        });
    }
}
