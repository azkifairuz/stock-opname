@extends('layouts.master',
[
'title'=>'Form Input',
'nm_menu'=>'produksi'
])
@section('content')
<section class="content">
    <!-- Main content -->
    <section class="content">
      <form name="tambahdata" method="POST" action="">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">produksi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                    <select name="level" id="" class="form-control">
                      <option value="2">kaprodi</option>
                      <option value="3">dekan</option>
                      <option value="4">wr1</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>prodi</label>
                    <select name="kdProdi" id="" class="form-control">
                      <option value="">-=pilih prodi=-</option>
                    </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              <!-- /.card -->

            </div>
          </div>

      </form>
  </section>
</section>
@endsection