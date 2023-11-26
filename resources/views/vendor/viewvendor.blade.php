@extends('layouts.master',
[
'title'=>'Table Vendor',
'nm_menu'=>'Vendor'
])
@section('content')
<section class="content">
  <div class="card">
    <div class="row card-header">
        <div class="col-8">
            <h3 class="card-title">Rak</h3> 
        </div>
        <div class="col-4 d-flex justify-content-end">
            <a class="btn btn-success" href="{{route('add-vendor')}}">Tambah Data</a>
        </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Vendor</th>
            <th>Nomor Telpon Vendor</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @if(count($dataVendor) === 0)
                <tr>
                    <td colspan="6" align="center">Belum ada data devisi yang dibuat.</td>
                </tr>
            @else
            @foreach($dataVendor as $data)
                    <tr>
                        <td>{{ ++$i}}</td>
                        <td>{{ $data->nm_vendor }}</td>
                        <td>{{ $data->no_telp }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>
                            <a class="btn btn-primary" href="edit-vendor/{{$data->id_vendor}}">Edit</a>
                            <a class="btn btn-danger" href="del-vendor-action/{{$data->id_vendor}}">Delete</a>
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