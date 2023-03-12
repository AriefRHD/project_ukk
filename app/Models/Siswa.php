<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use Notifiable;

    protected $table = 'siswa';

    protected $primaryKey = 'id_siswa';
    
    protected $fillable = ['id_siswa','nisn','nis','nama', 'id_kelas', 'alamat', 'no_telp', 'id_spp', 'username', 'email'];

    protected $hidden = ['password',  'remember_token'];
    
    public function kelas()
    {
        return $this->belongsTo('App\Models\kelas', 'id_kelas');
    }

    public function spp()
    {
        return $this->belongsTo('App\Models\Spp', 'id_spp');
    }

}