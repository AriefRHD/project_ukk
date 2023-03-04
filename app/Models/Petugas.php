<?php

namespace App\Models;

use App\Models\petugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class petugas extends Model
{
    protected $primaryKey = "id_petugas";
    protected $table = "petugas";
    protected $fillable = [
        'id_petugas','username','password', 'nama_petugas', 'level', 'foto_profile'
    ];

    public function siswa(){
        return $this->hasMany(siswa::class);
    }

}