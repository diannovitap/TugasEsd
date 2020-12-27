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
public function tambah()
{
	return view('tambah');
}
public function store(Request $request)
{
	
	DB::table('peminjam')->insert([
		'id_peminjam' => $request->id_peminjam,
		'id_ruangan' => $request->id_ruangan,
		'fakultas' => $request->fakultas,
		'jurusan' => $request->jurusan,
		'nama_peminjam' => $request->nama_peminjam,
		'no_telp' => $request->no_telp
	]);
	return redirect('/peminjam');
 
}