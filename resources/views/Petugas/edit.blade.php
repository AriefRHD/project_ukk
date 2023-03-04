@extends('templatenya.main')

@section('content')

<div class="card">
    <div class="card-body">
            <center>
                <h4 class="card-title">Edit Data Petugas</h4>
            </center>
        <form action="{{ route('petugas.update', $Petugas->id_petugas) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputUsername1">Username :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username Petugas" name="username" value="{{ $Petugas->username}}">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Password :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Password" name="password" value="{{ $Petugas->password}}">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Nama Petugas :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Petugas" name="nama_petugas" value="{{ $Petugas->nama_petugas}}">
              </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Level :</label>
                    <select name="level" class="form-control">
                          <option value="{{ $Petugas->level}}">{{ $Petugas->level}}</option>
                          <option value="admin">Admin</option>
                          <option value="petugas">Petugas</option>
                    </select>
                  </div>
              <a href="{{ route('petugas.index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection