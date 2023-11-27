@extends('layouts.master',
[
'title'=>'Table Rak',
'nm_menu'=>'Rak'
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
        <div sty id="progress-bar" class="progress-bar" role="progressbar" style="width: 100%; background-color: #006400;"></div>
    </div>
  </div>
  @endif
        <div class="col-8">
            <h3 class="card-title">Rak</h3> 
        </div>
        <div class="col-4 d-flex justify-content-end">
            <a class="btn btn-success" href="{{route('add-rak')}}">Tambah Data</a>
        </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Rak</th>
            <th>Nama Rak</th>
            <th>Keterangan Devisi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @if(count($rak) === 0)
                <tr>
                    <td colspan="5" align="center">Belum ada data devisi yang dibuat.</td>
                </tr>
            @else
            @foreach($rak as $data)
                    <tr>
                        <td>{{ ++$i}}</td>
                        <td>{{ $data->kd_rak }}</td>
                        <td>{{ $data->nm_rak }}</td>
                        <td>{{ $data->ket_rak }}</td>
                        <td>
                            <a class="btn btn-primary" href="edit-rak/{{$data->id_rak}}">Edit</a>
                            <a class="btn btn-danger" href="del-rak-action/{{$data->id_rak}}">Delete</a>
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