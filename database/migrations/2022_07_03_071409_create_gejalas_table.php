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
        Schema::create('tabel_gejala', function (Blueprint $table) {
            $table->id();
            $table->string('kode_gejala')->unique();
            $table->string('gejala');
            $table->text('pertanyaan');
            $table->string('urutan');
            $table->foreignId('kategori_id')->constrained('tabel_kategori', 'id')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('tabel_gejala');
    }
};
