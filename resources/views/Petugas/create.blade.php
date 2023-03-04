@extends('templatenya.main')

@section('content')

<div class="row d-flex" style="justify-content: center;">

    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body p-5">
            <center>
          <h4 class="card-title">Masukkan Data Petugas</h4>
            </center>
          <form action="{{ route('petugas.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username :</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username Petugas" name="username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Password :</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Petugas :</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Petugas" name="nama_petugas">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Level :</label>
                      <select name="level" class="form-control">
                            <option value="">Pilih Level</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                      </select>
                    </div>

                    <div class="modal-footer">
                          <a href="{{ route('petugas.index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                          Cancel
                        </a>
                          <button type="submit" class="btn btn-outline-primary btn-icon-text">
                          Submit
                        </button>
                    </div>
          </form>
        </div>
      </div>
    </div>
</div>

@endsection