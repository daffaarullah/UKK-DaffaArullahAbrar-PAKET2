<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->dateTime('tgl_pengaduan');
            $table->foreignId('nik', 16);
            $table->string('judul_laporan');
            $table->text('isi_laporan');
            $table->dateTime('tgl_kejadian');
            $table->text('lokasi_kejadian');
            $table->string('foto');
            $table->enum('akses', ['0', 'semua', 'terbatas'])->nullable();
            $table->enum('status', ['0', 'proses', 'selesai']);
            $table->timestamps();

            $table->foreign('nik')->references('nik')->on('masyarakat')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduan');
    }
}
