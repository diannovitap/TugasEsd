<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    protected $table = 'peminjam';
    protected $fillable = ['id_peminjam','fakultas', 'jurusan', 'nama_peminjam', 'no_telp'];
    public $timestamps = false;
}
