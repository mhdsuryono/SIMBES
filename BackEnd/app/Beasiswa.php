<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Beasiswa extends Authenticatable
{
    //
    use Notifiable;
    protected $table = 'beasiswas';
    protected $primaryKey = 'id_beasiswa';

    protected $fillable = [
        'id_adm','nama','deskripsi','persyaratan','jenjangPendidikan',
        'semester','ipkMin','berkas','pembukaan', 'penutupan', 'jumlah_daftar',
        'sk', 'pendonor', 'status_aktif','alamat_berkas','alamat_foto',
    ];

    protected $hidden = [
    ];
}
