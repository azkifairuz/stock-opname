@extends('layouts.master',
[
'title'=>'Peminjaman',
'nm_menu'=>'peminjaman'
])
@section('content')

<form action="{{ route('add-peminjaman-action') }}" method="POST">
  @csrf
  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Input Data Peminjaman</h3>
      </div>
      <div class="card-body">

        <div class="form-group">
          <label>Sparepart:</label>
          <select class="form-control select2"  name="sparepart" style="width: 100%;">
            @if(count($spareparts) === 0)
            <option disabled="disabled">data sparepart kosong</option>
            @endif
            @foreach($spareparts as $sparepart)
              <option  value="{{$sparepart->id_sparepart}}">{{$sparepart->nm_sparepart}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Peminjam:</label>
          <select name="peminjam" class="form-control select2" style="width: 100%;">
            @if(count($pegawais) === 0)
              <option disabled="disabled">data peminjam kosong</option>
            @endif
            @foreach($pegawais as $pegawai)
              <option value="{{$pegawai->id_pegawai}}">{{$pegawai->nm_pegawai}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>mesin:</label>
          <select  name="mesin" class="form-control select2" style="width: 100%;">
            @if(count($mesins) === 0)
              <option disabled="disabled">data mesin kosong</option>
            @endif
            @foreach($mesins as $mesin)
              <option  class="form-control" value="{{$mesin->id_mesin}}">{{$mesin->nm_mesin}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label>jumlah barang yg dipinjam : </label>
          <div class="form-group" id="reservationdate">
            <input type="text"  name="qty"  class="form-control"  />
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