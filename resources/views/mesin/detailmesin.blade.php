@extends('layouts.master',
[
'title'=>'Table Vendor',
'nm_menu'=>'Vendor'
])
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <h3 class="profile-username text-center">Data Mesin</h3>
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Nama Mesin</b> <a class="float-right">{{$dataMesin->nm_mesin}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Spesifikasi</b> <a class="float-right">{{$dataMesin->specifikasi}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Keterangan</b> <a class="float-right">{{$dataMesin->ket_mesin}}</a>
                    </li>          
                </ul>
                <button   data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-block">
                  <b>Tambahkan Sparepart</b>
                </button>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sparepart Mesin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>nama sparepart</th>
                    <th>jumlah</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @if(count($spMesin) === 0)
                    <tr>
                      <td colspan="9" align="center">Belum ada data peminjaman yang dibuat.</td>
                    </tr>
                    @else
                    @foreach($spMesin as $data)
                    <tr>
                      <td>{{ ++$i}}</td>
                      <td>{{ $data->nm_sparepart }}</td>
                      <td>{{ $data->qty}}</td>
                      <td>
                        <a data-toggle="modal" data-target="#updateModal" class="btn btn-primary">Edit</a>
                        <a class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>      
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h5 class="modal-title " id="exampleModalLabel">Tambah Sparepart</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('add-spmesin-action') }}" method="POST">
                @csrf
                <div class="form-group ">
                  <label for="message-text" class="col-form-label">idmesin:</label>
                  <input class="form-control" name="id_mesin"  type="number" value="{{$dataMesin->id_mesin}}" id="message-text"/>
                </div>
                <div class="form-group">
                  <label for="sparepart" class="col-form-label">Sparepart:</label>
                  <select class="form-control select2"  id="sparepart" name="sparepart" style="width: 100%;">
                  @if(count($spareparts) === 0)
                  <option disabled="disabled">data sparepart kosong</option>
                  @endif
                  @foreach($spareparts as $sparepart)
                    <option  value="{{$sparepart->id_sparepart}}">{{$sparepart->nm_sparepart}}</option>
                  @endforeach
                </select>
                </div>
                <div class="form-group">
                  <label for="message-text"  class="col-form-label">Jumlah:</label>
                  <input class="form-control" name="qty" type="number" id="message-text"/>
                </div>
                <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
      <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h5 class="modal-title " id="exampleModalLabel">edit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('add-spmesin-action') }}" method="POST">
                @csrf
                <div class="form-group ">
                  <label for="message-text" class="col-form-label">idmesin:</label>
                  <input class="form-control" name="id_mesin"  type="number" value="{{$dataMesin->id_mesin}}" id="message-text"/>
                </div>
                <div class="form-group">
                  <label for="sparepart" class="col-form-label">Sparepart:</label>
                  <select class="form-control select2"  id="sparepart" name="sparepart" style="width: 100%;">
                  @if(count($spareparts) === 0)
                  <option disabled="disabled">data sparepart kosong</option>
                  @endif
                  @foreach($spareparts as $sparepart)
                    <option  value="{{$sparepart->id_sparepart}}">{{$sparepart->nm_sparepart}}</option>
                  @endforeach
                </select>
                </div>
                <div class="form-group">
                  <label for="message-text"  class="col-form-label">Jumlah:</label>
                  <input class="form-control" name="qty" type="number" id="message-text"/>
                </div>
                <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
  </section>
@endsection