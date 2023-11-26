@extends('layouts.master',
[
'title'=>'Table Sparepart',
'nm_menu'=>'Sparepart'
])
@section('content')
<section class="content">
  <div class="card">
    <div class="row card-header">
        <div class="col-8">
            <h3 class="card-title">Sparepart</h3> 
        </div>
        <div class="col-4 d-flex justify-content-end">
            <a class="btn btn-success" href="{{route('add-sparepart')}}">Tambah Data</a>
        </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Image</th>
            <th>Kode Sparepart</th>
            <th>Part Number</th>
            <th>Nama Sparepart</th>
            <th>Nomor Rak</th>
            <th>Specifikasi</th>
            <th>Vendor</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @if(count($dataSparepart) === 0)
                <tr>
                    <td colspan="6" align="center">Belum ada data devisi yang dibuat.</td>
                </tr>
            @else
            @foreach($dataSparepart as $data)
                    <tr>
                        <td>{{ ++$i}}</td>
                        <!-- <td><img src="{{ asset('/storage/sparepart/'.$data->image) }}" alt="" srcset="" width="50px" height="50px"></td> -->
                        <td>
                          <a href="http://localhost:8000/storage/sparepart/{{$data->image}}" data-toggle="lightbox" data-title="Part Number : {{$data->part_number}}">
                            <img src="{{ asset('/storage/sparepart/'.$data->image) }}" class="img-fluid mb-2" alt="white sample" width="50px" height="50px"/>
                          </a>
                        </td>
                        <td>{{ $data->kd_sparepart}}</td>
                        <td>{{ $data->part_number}}</td>
                        <td>{{ $data->nm_sparepart}}</td>
                        <td>{{ $data->nm_rak}}</td>
                        <td>{{ $data->specifikasi}}</td>
                        <td>{{ $data->nm_vendor}}</td>
                        <td>{{ $data->ket_sparepart}}</td>
                        <td>
                            <a class="btn btn-primary" href="edit-sparepart/{{$data->id_sparepart}}">Edit</a>
                            <a class="btn btn-danger" href="del-sparepart-action/{{$data->id_sparepart}}">Delete</a>
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