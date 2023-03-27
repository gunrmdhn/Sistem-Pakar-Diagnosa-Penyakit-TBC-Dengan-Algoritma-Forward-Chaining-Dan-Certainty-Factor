<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_pasien', function (Blueprint $table) {
            $table->id();
            $table->string('kode_registrasi')->unique();
            $table->string('tanggal_registrasi');
            $table->string('nama_pasien');
            $table->string('tanggal_lahir');
            $table->string('usia');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->string('jenis_kelamin');
            $table->string('golongan_darah');
            $table->string('indikasi')->nullable();
            $table->float('cf_persen')->nullable();
            $table->foreignId('penyakit_id')->nullable()->constrained('tabel_penyakit', 'id')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('tabel_pasien');
    }
};
