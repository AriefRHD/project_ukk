<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Spp;
use App\Models\Siswa;
use App\Models\Petugas;

class Pembayaran extends Model
{
    protected $primaryKey = "id_pembayaran";
    protected $table = "pembayaran";
    protected $fillable = [
        'id_pembayaran','id_petugas','nisn', 'tgl_bayar', 'bulan_dibayar', 'tahun_dibayar','id_spp','jumlah_bayar'
    ];

    public function petugas(){
        return $this->belongsTo(petugas::class, 'id_petugas');
    }

    public function siswa(){
        return $this->belongsTo(siswa::class, 'nisn');
    }

    public function spp(){
        return $this->belongsTo(spp::class, 'id_spp');
    }

}
