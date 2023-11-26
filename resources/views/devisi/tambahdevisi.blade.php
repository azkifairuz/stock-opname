@extends('layouts.master',
[
'title'=>'Input Devisi',
'nm_menu'=>'Devisi'
])
@section('content')



<form action="{{ route('add-devisi-action') }}" method="POST">
        @csrf


  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Input Data Devisi</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label>Nama Devisi:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="nm_devisi" class="form-control" data-target="#reservationdate"/> 
            </div>
        </div>

        <div class="form-group">
          <label>Keterangan</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <textarea name="ket_devisi" class="form-control" cols="30" rows="10"></textarea>
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