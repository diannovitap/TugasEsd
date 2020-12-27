<?php

namespace App\Http\Controllers;
use App\Models\Peminjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamController extends Controller
{
    public function login()
    {
    	return view ('login');
    }

    public function main()
    {
    	return view ('main');
    }
    public function index()
    {
    	$peminjam = Peminjam::all();
    	return view('peminjam', ['peminjam' => $peminjam]);
    }

    public function create(){
    	return view('createPeminjam');
    }
    public function store(Request $request){

    	$this->validate($request,[
    		'id_peminjam' => 'required',
    		'id_ruangan' => 'required',
    		'fakultas' => 'required',
    		'jurusan' => 'required',
    		'nama_peminjam' => 'required',
    		'no_telp' => 'required'
    	]);

    	$peminjam = Peminjam::create([
    		'id_peminjam' => $request->id_peminjam,
    		'id_ruangan' => $request->id_ruangan,
    		'fakultas' => $request->fakultas,
    		'jurusan' => $request->jurusan,
    		'nama_peminjam' => $request->nama_peminjam,
    		'no_telp' => $request->no_telp
    	]);

    	if ($peminjam) {
    		return redirect('peminjam')->with(['succces' => 'Data berhasil disimpan']);
    	} else {
    		return redirect('peminjam')->with(['error' => 'Data gagal disimpan']);
    	}

    }
}
