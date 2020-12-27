@extends('layout/main')
@section('konten')
<div class="main-content">
	<div class="container-fluid">
	<div class="panel panel-headline">
		<a href="/ruangan/tambahRuangan" class="btn btn-primary my-5"> Tambah Data Ruangan</a>
		<table class="table table-power">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Ruangan</th>
				<th scope="col">Kode Dosen</th>
				<th scope="col">Nama Dosen</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Aksi</th>
			<tr>
		</thead>
		<tbody>
			 @foreach($ruangan as $p)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$p->id_ruangan}}</td>
            <td>{{$p->kode_dosen}}</td>
            <td>{{$p->nama_dosen}}</td>
            <td>{{$p->tanggal}}</td>
            <td>
            <a href="/ruangan/hapusRuangan/{{$p->id_ruangan}}" class="btn btn-danger">HAPUS</a>
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