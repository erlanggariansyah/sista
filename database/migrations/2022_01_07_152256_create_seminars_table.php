<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nim');
            $table->string('nama_lengkap');
            $table->enum('prodi', ['Teknik Informatika', 'Sistem Informasi', 'Bisnis Digital']);
            $table->date('tanggal_seminar');
            $table->time('jam_seminar');
            $table->string('ruangan');
            $table->string('judul');
            $table->enum('seminar', ['Proposal', 'Skripsi', 'Pendidikan', 'Parenting', 'Kesehatan']);
            $table->string('pembimbing');
            $table->string('penguji_1');
            $table->string('penguji_2');
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
        Schema::dropIfExists('seminars');
    }
}
