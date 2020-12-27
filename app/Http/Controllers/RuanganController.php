<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RuanganController extends Controller
{
    public function main()
    {
    	return view ('main');
    }
    public function index()
    {
        $ruangan = ruangan::all();
        return view('ruangan', ['ruangan' => $ruangan]);
    }
    public function tambahRuangan()
{
    return view('tambahRuangan');
}
    public function store(Request $request)
    {
    
    DB::table('ruangan')->insert([
        'id_ruangan' => $request->id_ruangan,
        'kode_dosen' => $request->kode_dosen,
        'nama_dosen' => $request->nama_dosen,
        'tanggal' => $request->tanggal
    ]);
    return redirect('/ruangan');
 
}
    public function hapusRuangan($id_ruangan)
    {
    DB::table('ruangan')->where('id_ruangan',$id_ruangan)->delete();
        
    return redirect('/ruangan');
    }

}