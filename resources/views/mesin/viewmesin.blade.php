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
            <a class="btn btn-success" href="{{route('add-mesin')}}">Tambah Data</a>
        </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Mesin</th>
            <th>specifikasi</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @if(count($dataMesin) === 0)
                <tr>
                    <td colspan="5" align="center">Belum ada data devisi yang dibuat.</td>
                </tr>
            @else
            @foreach($dataMesin as $data)
                    <tr>
                        <td>{{ ++$i}}</td>
                        <td>{{ $data->nm_mesin }}</td>
                        <td>{{ $data->specifikasi }}</td>
                        <td>{{ $data->ket_mesin }}</td>
                        <td>
                            <a class="btn btn-primary" href="edit-mesin/{{$data->id_mesin}}">Edit</a>
                            <a class="btn btn-danger" href="del-mesin-action/{{$data->id_mesin}}">Delete</a>
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