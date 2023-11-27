@extends('layouts.master',
[
'title'=>'Input Pembelian Sparepart',
'nm_menu'=>'Pembelian Sparepart'
])
@section('content')



<form action="{{ route('add-pembeliansparepart-action') }}" method="POST">
        @csrf


  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Input Data Pembelian</h3>
      </div>
      <div class="card-body">

        <div class="form-group">
          <label>Nomor Nota:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="no_nota" class="form-control" data-target="#reservationdate"/> 
            </div>
        </div>
        <div class="form-group">
          <label>Tanggal Pembelian:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="date" name="tgl_pembelian" class="form-control" data-target="#reservationdate"/> 
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