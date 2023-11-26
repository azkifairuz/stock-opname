@extends('layouts.master',
[
'title'=>'Input Pegawai',
'nm_menu'=>'Pegawai'
])
@section('content')



<form action="{{ route('add-pegawai-action') }}" method="POST">
        @csrf


  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Input Data Pegawai</h3>
      </div>
      <div class="card-body">

        <div class="form-group">
          <label>NIP:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="nip" class="form-control" data-target="#reservationdate"/> 
            </div>
        </div>
        <div class="form-group">
          <label>Nama Pegawai:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="nm_pegawai" class="form-control" data-target="#reservationdate"/> 
            </div>
        </div>
        <div class="form-group">
          <label>Devisi:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
              <select name="id_devisi" id="" class="form-control">
                <option value="">Silahkan pilih devisi</option>
                @foreach($devisi as $data)
                <option value="{{$data->id_devisi}}">{{$data->nm_devisi}}</option>
                @endforeach
              </select>
            </div>
        </div>
      </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</form>

@endsection