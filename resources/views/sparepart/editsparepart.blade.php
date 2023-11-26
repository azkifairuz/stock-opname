@extends('layouts.master',
[
'title'=>'Edit Sparepart',
'nm_menu'=>'Sparepart'
])
@section('content')



<form action="{{ route('edit-sparepart-action',$dataSparepart->id_sparepart) }}" method="POST" enctype="multipart/form-data">
        @csrf

  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Sparepart</h3>
      </div>
      <div class="card-body">
        

        <div class="form-group">
          <label>Kode Sparepart:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="kd_sparepart" class="form-control" value="{{$dataSparepart->kd_sparepart}}"/> 
            </div>
        </div>
        <div class="form-group">
          <label>Part Number:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="part_number" class="form-control" value="{{$dataSparepart->part_number}}"/> 
            </div>
        </div>
        <div class="form-group">
          <label>Nama Sparepart:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="nm_sparepart" class="form-control" value="{{$dataSparepart->nm_sparepart}}"/> 
            </div>
        </div>

        <div class="form-group">
          <label>specifikasi sparepart</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <textarea name="specifikasi" class="form-control" cols="30" rows="10">{{$dataSparepart->specifikasi}}</textarea>
            </div>
        </div>

        <div class="form-group">
          <label>Keterangan sparepart</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <textarea name="ket_sparepart" class="form-control" cols="30" rows="10">{{$dataSparepart->ket_sparepart}}</textarea>
            </div>
        </div>
       
        <div class="form-group">
          <label>Nomor Rak</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <select name="id_rak" id="" class="form-control">
                  <option value="{{$dataSparepart->id_rak}}">{{$dataSparepart->nm_rak}}</option>
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
                  <option value="{{$dataSparepart->id_vendor}}">{{$dataSparepart->nm_vendor}}</option>
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
            <label>*jika gambar tidak di update maka kosongkan saja..</label>
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