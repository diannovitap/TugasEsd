@extends('layout/main')
@section('konten')
<div class="main-content">
	<div class="container-fluid">
	<div class="panel panel-headline">	
	<form action="/ruangan/store" method="post">
		{{ csrf_field() }}
		<div class="form-group"> <label for ="nama">Ruangan</label> <input class="form-control" type="text" name="id_ruangan" required="required"> </div><br/>
		<div class="form-group"><label for ="nama">Kode Dosen</label><input class="form-control" type="text" name="kode_dosen" required="required"> </div> <br/>
		<div class="form-group"><label for ="nama">Nama Dosen</label><input class="form-control" type="text" name="nama_dosen" required="required"> </div> <br/>
		<div class="form-group"><label for ="nama">Tanggal</label><input class="form-control" type="date" name="tanggal" required="required"> </div> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</div>
</div>
</div>
@endsection