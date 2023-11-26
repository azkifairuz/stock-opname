@extends('layouts.master',
[
'title'=>'Table Devisi',
'nm_menu'=>'Devisi'
])
@section('content')
<section class="content">
  <div class="card">
    <div class="row card-header">
    @if($message = Session::get('success'))
  <div id='alert-success' class="col-12 mb-5">
    <div class="alert col-12 alert-success mb-0 alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-check"></i> {{$message}}!</h5>
    
    </div>
   
    <div class="progress progress-xs bg-light col-12 p-0  mt-0">
        <div sty id="progress-bar" class="progress-bar " role="progressbar" style="width: 100%; background-color: #006400;"></div>
    </div>
  </div>
  @endif
        <div class="col-8">
            <h3 class="card-title">Devisi</h3> 
        </div>
        <div class="col-4 d-flex justify-content-end">
            <a class="btn btn-success" href="{{route('add-devisi')}}">Tambah Data</a>
        </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Devisi</th>
            <th>Keterangan Devisi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @if(count($devisi) === 0)
                <tr>
                    <td colspan="4" align="center">Belum ada data devisi yang dibuat.</td>
                </tr>
            @else
            @foreach($devisi as $data)
                    <tr>
                        <td>{{ ++$i}}</td>
                        <td>{{ $data->nm_devisi }}</td>
                        <td>{{ $data->ket_devisi }}</td>
                        <td>
                            <a class="btn btn-primary" href="edit-devisi/{{$data->id_devisi}}">Edit</a>
                            <a class="btn btn-danger" href="del-devisi-action/{{$data->id_devisi}}">Delete</a>
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