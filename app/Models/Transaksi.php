<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'Transaksi';
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_sampah', 'nama_p', 'jumlah', 'total', 'harga', 'jenis_1'];

    
    public function jenis(){
    	return $this->belongsTo(Jenis::class, 'id_sampah');
    }
    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
}
