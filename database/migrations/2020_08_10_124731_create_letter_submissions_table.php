<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLetterSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_submissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('official_id')->nullable();
            $table->string('nomor_surat')->nullable();
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pekerjaan');
            $table->string('keperluan_sk');
            $table->string('nomor_hp');
            $table->string('upload_pengantar_rt');
            $table->string('upload_pengantar_rw');
            $table->string('jenis_sk');
            $table->string('rt');
            $table->string('rw');
            $table->enum('dusun',['Dusun Sidoagung','Dusun Sidodadi']);
            $table->enum('agama',['Islam','Hindu','Budha','Kristen','Katolik','Protestan']);
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->enum('status_kawin',['Kawin','Belum Kawin','Cerai Hidup','Cerai Mati']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('letter_submissions');
    }
}
