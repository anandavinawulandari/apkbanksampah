<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    
    protected $table = 'Jenis';
    protected $primaryKey = 'id_sampah';
    protected $fillable = ['id_sampah','nama', 'jenis', 'deskripsi', 'harga', 'file'];

    public function jenis(){
        return $this->hasMany(Jenis::class, 'id_sampah');
     }
 
}
