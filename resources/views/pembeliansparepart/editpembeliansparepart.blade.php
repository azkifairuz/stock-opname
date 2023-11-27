@extends('layouts.master',
[
'title'=>'Edit Pembelian Sparepart',
'nm_menu'=>'Pembelian Sparepart'
])
@section('content')



<form action="{{ route('edit-pembeliansparepart-action',$dataPembelian->id_pembelian) }}" method="POST">
        @csrf

  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Pembelian Sparepart</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label>Nomor Nota:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="no_nota" class="form-control" data-target="#reservationdate" value="{{$dataPembelian->no_invoice}}"/> 
            </div>
        </div>
        <div class="form-group">
          <label>Tanggal Pembelian:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
            <input type="date" name="tgl_pembelian" class="form-control" data-target="#reservationdate" value="{{$dataPembelian->tgl_pembelian}}"/> 
            </div>
        </div>
        <div class="form-group">
          <label>Email:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <select name="id_vendor" id="" class="form-control">
                  <option value="{{$dataPembelian->id_vendor}}">{{$dataPembelian->nm_vendor}}</option>
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