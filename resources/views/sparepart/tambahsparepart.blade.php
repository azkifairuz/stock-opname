@extends('layouts.master',
[
'title'=>'Input Sparepart',
'nm_menu'=>'Sparepart'
])
@section('content')



<form action="{{ route('add-sparepart-action') }}" method="POST" enctype="multipart/form-data">
        @csrf


  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Input Data Sparepart</h3>
      </div>
      <div class="card-body">

        <div class="form-group">
          <label>Kode Sparepart:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="kd_sparepart" class="form-control" data-target="#reservationdate"/> 
            </div>
        </div>
        <div class="form-group">
          <label>Part Number:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="part_number" class="form-control" data-target="#reservationdate"/> 
            </div>
        </div>
        <div class="form-group">
          <label>Nama Sparepart:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="nm_sparepart" class="form-control" data-target="#reservationdate"/> 
            </div>
        </div>

        <div class="form-group">
          <label>specifikasi sparepart</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <textarea name="specifikasi" class="form-control" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="form-group">
          <label>Keterangan sparepart</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <textarea name="ket_sparepart" class="form-control" cols="30" rows="10"></textarea>
            </div>
        </div>
       
        <div class="form-group">
          <label>Nomor Rak</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <select name="id_rak" id="" class="form-control">
                  <option value="">Silahkan Pilih Rak</option>
                  @foreach($rak as $row)
                  <option value="{{$row->id_rak}}">{{$row->nm_rak}}</option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
          <label>dibeli dari Vendor</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <select name="id_vendor" id="" class="form-control">
                  <option value="">Silahkan Pilih Vendor</option>
                  @foreach($vendor as $row1)
                  <option value="{{$row1->id_vendor}}">{{$row1->nm_vendor}}</option>
                  @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
          <label>Image</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <input type="file" name="image" id="" class="form-control">
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