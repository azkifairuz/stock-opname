@extends('layouts.master',
[
'title'=>'Edit Mesin',
'nm_menu'=>'Mesin'
])
@section('content')



<form action="{{ route('edit-mesin-action',$dataMesin->id_mesin) }}" method="POST">
        @csrf

  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Mesin</h3>
      </div>
      <div class="card-body">
        
      <div class="form-group">
          <label>Nama Mesin:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="nm_mesin" class="form-control" data-target="#reservationdate" value="{{$dataMesin->nm_mesin}}"/> 
            </div>
        </div>

        <div class="form-group">
          <label>Specifikasi</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <textarea name="specifikasi" class="form-control" cols="30" rows="10">{{$dataMesin->specifikasi}}</textarea>
            </div>
        </div>
        <div class="form-group">
          <label>Keterangan Mesin</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <textarea name="ket_mesin" class="form-control" cols="30" rows="10">{{$dataMesin->ket_mesin}}</textarea>
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