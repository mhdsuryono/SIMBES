<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin-api';
    protected $table = 'admins';
    protected $primaryKey = 'id_adm';

    protected $fillable = [
        'id_adm','no_pegawai','nama','jenis_kelamin','email',
        'api_token','password','status_aktif','status_akses',
    ];

    protected $hidden = [
        'password','api_token'
    ];
}