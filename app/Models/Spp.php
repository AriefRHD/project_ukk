<?php

namespace App\Models;

use App\Models\Spp;
use App\Models\siswa;
use App\Models\pembayaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Spp extends Model
{
    protected $primaryKey = "id_spp";
    protected $table = "spp";
    protected $fillable = [
        'id_spp','tahun','nominal'
    ];

    public function siswa(){
        return $this->hasMany(siswa::class);
    }

    public function pembayaran(){
        return $this->hasMany(pembayaran::class);
    }
    
}