@extends('layouts.master',
[
'title'=>'Table Pegawai',
'nm_menu'=>'Pegawai'
])
@section('content')

<section class="content">
  <div class="card">
    <div class="row card-header">
        <div class="col-8">
            <h3 class="card-title">Pegawai</h3> 
        </div>
        <div class="col-4 d-flex justify-content-end">
            <a class="btn btn-success" href="{{route('add-pegawai')}}">Tambah Data</a>
        </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Devisi</th>
            <th>Nama Pegawai</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @if(count($dataPegawai) === 0)
                <tr>
                    <td colspan="5" align="center">Belum ada data devisi yang dibuat.</td>
                </tr>
            @else
            @foreach($dataPegawai as $data)
                    <tr>
                        <td>{{ ++$i}}</td>
                        <td>{{ $data->nip }}</td>
                        <td>{{ $data->nm_devisi }}</td>
                        <td>{{ $data->nm_pegawai }}</td>
                        <td>
                            <a class="btn btn-primary" href="edit-pegawai/{{$data->id_pegawai}}">Edit</a>
                            <a class="btn btn-danger" href="del-pegawai-action/{{$data->id_pegawai}}">Delete</a>
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