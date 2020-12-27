<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';
    protected $fillable = ['id_ruangan','kode_dosen', 'nama_dosen', 'tanggal'];
    public $timestamps = false;
}
