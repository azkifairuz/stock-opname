@extends('layouts.master',
[
'title'=>'Edit Rak',
'nm_menu'=>'Rak'
])
@section('content')



<form action="{{ route('edit-vendor-action',$dataVendor->id_vendor) }}" method="POST">
        @csrf

  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Rak</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label>Nama Vendor:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="nm_vendor" class="form-control" value="{{$dataVendor->nm_vendor}}"> 
            </div>
        </div>
        <div class="form-group">
          <label>Nomor Telpon:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="no_telp" class="form-control" value="{{$dataVendor->no_telp}}"> 
            </div>
        </div>
        <div class="form-group">
          <label>Email:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="email" class="form-control" value="{{$dataVendor->email}}"> 
            </div>
        </div>

        <div class="form-group">
          <label>Keterangan</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <textarea name="alamat" class="form-control" cols="30" rows="10">{{$dataVendor->alamat}}</textarea>
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