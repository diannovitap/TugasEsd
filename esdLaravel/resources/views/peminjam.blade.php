@extends('/main')
@section('title', 'PINJAMIN')
@section('konten')
<section id="main-content">
	<section class="wrapper">
	<div class="agileinfo-grap">
		<div class="agileits-box">
		<header class="agileits-box-header clearfix">
		<a href="/peminjam/create" class="btn btn-primary my-5"> Tambah Data Peminjam</a>
		<table class="table table-power">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">NIM</th>
				<th scope="col">Fakultas</th>
				<th scope="col">Jurusan</th>
				<th scope="col">Nama Lengkap</th>
				<th scope="col">No Telp</th>
				<th scope="col">Aksi</th>
		</thead>
		<tbody>
		@foreach($peminjam as $pmj)
			<tr>
			<th scope="row">{{$loop->interaction}}</th>
			<td>{{$pmj->id_peminjam}}</td>
			<td>{{$pmj->fakultas}}</td>
			<td>{{$pmj->jurusan}}</td>
			<td>{{$pmj->nama_peminjam}}</td>
			<td>{{$pmj->no_telp}}</td>
			<td>
				<a href="" class="btn btn-succes">HAPUS</a>
			</td>	
			</tr>
		@endforeach
		</tbody>
		</table>
		<div class="toolbar">
						</div>
						</header>
					<div class="agileits-box-body clearfix">
				<div id="hero-area"></div>
					</div>
	</div>
	</section>
</section>
@endsection