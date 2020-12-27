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
        $peminjam = peminjam::all();
        return view('peminjam', ['peminjam' => $peminjam]);
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
    public function hapus($id_peminjam)
    {
    DB::table('peminjam')->where('id_peminjam',$id_peminjam)->delete();
        
    return redirect('/peminjam');
    }

    }