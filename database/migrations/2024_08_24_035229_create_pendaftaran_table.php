<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
            $table->string('nama_lengkap');
            $table->text('alamat_ktp');
            $table->text('alamat_lengkap');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('nomor_telepon');
            $table->string('nomor_hp');
            $table->string('email');
            $table->enum('kewarganegaraan', ['WNI asli', 'WNI keturunan', 'WNA']);
            $table->string('negara_asal')->nullable(); // Nullable untuk negara_asal jika kewarganegaraan adalah WNI
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->enum('jenis_kelamin', ['pria', 'wanita']);
            $table->enum('status_menikah', ['belum menikah', 'menikah', 'lain-lain']);
            $table->enum('agama', ['islam', 'katolik', 'kristen', 'hindu', 'budha', 'lain-lain']);
            $table->decimal('nilai_matematika', 5, 2);
            $table->decimal('nilai_bahasa_inggris', 5, 2);
            $table->decimal('nilai_bahasa_indonesia', 5, 2);
            $table->timestamps(); // created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
