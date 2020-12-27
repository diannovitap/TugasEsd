@extends('layout/main')
@section('konten')
<div class="main-content">
	<div class="container-fluid">
	<div class="panel panel-headline">	
	<form action="/peminjam/store" method="post">
		{{ csrf_field() }}
		<div class="form-group"> <label for ="nama">NIM</label> <input class="form-control" type="text" name="id_peminjam" required="required"> </div><br/>
		<div class="form-group"><label for ="nama">Ruangan</label><input class="form-control" type="text" name="id_ruangan" required="required"> </div> <br/>
		<div class="form-group"><label for ="nama">Fakultas</label><input class="form-control" type="text" name="fakultas" required="required"> </div> <br/>
		<div class="form-group"><label for ="nama">Jurusan</label><input class="form-control" type="text" name="jurusan" required="required"> </div> <br/>
		<div class="form-group"><label for ="nama">Nama Lengkap</label><input class="form-control" type="text" name="nama_peminjam" required="required"> </div> <br/>
		<div class="form-group"><label for ="nama">No Telp</label><input class="form-control" type="text" name="no_telp" required="required"> </div> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</div>
</div>
</div>
@endsection