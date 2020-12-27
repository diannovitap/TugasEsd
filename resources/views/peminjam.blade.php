@extends('layout/main')
@section('konten')
<div class="main-content">
	<div class="container-fluid">
	<div class="panel panel-headline">
		<a href="/peminjam/tambah" class="btn btn-primary my-5"> Tambah Data Peminjam</a>
		<table class="table table-power">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">NIM</th>
				<th scope="col">Ruangan</th>
				<th scope="col">Fakultas</th>
				<th scope="col">Jurusan</th>
				<th scope="col">Nama Lengkap</th>
				<th scope="col">No Telp</th>
				<th scope="col">Aksi</th>
			<tr>
		</thead>
		<tbody>
			 @foreach($peminjam as $p)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$p->id_peminjam}}</td>
            <td>{{$p->id_ruangan}}</td>
            <td>{{$p->fakultas}}</td>
            <td>{{$p->jurusan}}</td>
            <td>{{$p->nama_peminjam}}</td>
            <td>{{$p->no_telp}}</td>
            <td>
            <a href="/peminjam/hapus/{{$p->id_peminjam}}" class="btn btn-danger">HAPUS</a>
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