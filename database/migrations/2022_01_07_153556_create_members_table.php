<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->integer('seminar_id');
            $table->string('nim');
            $table->string('nama');
            $table->enum('prodi', ['Teknik Informatika', 'Sistem Informasi', 'Bisnis Digital']);
            $table->enum('program', ['D3', 'S1 Reguler', 'S1 Fast Track', 'S2']);
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
        Schema::dropIfExists('members');
    }
}
