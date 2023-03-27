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
        Schema::create('tabel_basis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_basis')->unique();
            $table->foreignId('penyakit_id')->constrained('tabel_penyakit', 'id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('gejala_id')->constrained('tabel_gejala', 'id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->float('mb');
            $table->float('md');
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
        Schema::dropIfExists('tabel_basis');
    }
};
