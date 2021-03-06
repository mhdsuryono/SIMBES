<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->increments('id_beasiswa')->unique();
            $table->integer('id_adm')->unsigned();
            $table->string('nama');
            $table->text('deskripsi');
            $table->text('persyaratan');
            $table->string('jenjangPendidikan');
            $table->integer('semester');
            $table->double('ipkMin');
            $table->string('berkas');
            $table->date('pembukaan');
            $table->date('penutupan');
            $table->integer('jumlah_daftar');
            $table->string('sk');
            $table->string('pendonor');
            $table->timestamps();
            $table->integer('status_aktif');
            $table->string('alamat_berkas')->default('0');
            $table->string('alamat_foto')->default('0');
            $table->foreign('id_adm')->references('id_adm')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beasiswas');
    }
}
