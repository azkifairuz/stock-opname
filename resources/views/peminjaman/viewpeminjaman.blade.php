@extends('layouts.master',
[
'title'=>'Table Peminjaman',
'nm_menu'=>'peminjaman'
])
@section('content')
<section class="content"> <div class="card"> <div class="row card-header">
  @if($message = Session::get('success'))
  <div class="alert col-12 alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, voluptate.
  </div>
  @endif
  <div class="col-8">
    <h3 class="card-title">Peminjaman</h3>
    </div>
    <div class="col-4 d-flex justify-content-end">
      <a class="btn btn-success" href="{{route('add-peminjaman')}}">Tambah Data</a>
      </div>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>Kode peminjaman</th>
        <th>Peminjam</th>
        <th>Sparepart yg dipinjam</th>
        <th>mesin</th>
        <th>Tanggal Peminjaman</th>
        <th>qty</th>
        <th>status</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
        @if(count($peminjaman) === 0)
        <tr>
          <td colspan="9" align="center">Belum ada data peminjaman yang dibuat.</td>
        </tr>
        @else
        @foreach($peminjaman as $data)
        <tr>
          <td>{{ ++$i}}</td>
          <td>{{ $data->id_peminjaman }}</td>
          <td>{{ $data->peminjam}}</td>
          <td>{{ $data->nm_sparepart }}</td>
          <td>{{ $data->nm_mesin}}</td>
          <td>{{ $data->tgl_peminjaman}}</td>
          <td>{{ $data->qty}}</td>
          <td>{{ $data->status}}</td>
          <td>
            <a class="btn btn-primary" href="edit-peminjaman/{{$data->id_peminjaman}}">Edit</a>
            <a class="btn btn-danger" href="del-peminjaman-action/{{$data->id_peminjaman}}">Delete</a>
            </form>
          </td>
        </tr>
        @endforeach
        @endif
      </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</section>

@endsection