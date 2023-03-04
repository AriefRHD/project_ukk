@extends('templatenya.main')

@section('content')

<div class="card">
    <div class="card-body">
            <center>
                <h4 class="card-title">Edit Data Kelas</h4>
            </center>
        <form action="{{ route('kelas.update', $Kelas->id_kelas) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputUsername1">Nama Kelas :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Kelas" name="nama_kelas" value="{{ $Kelas->nama_kelas}}">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Kompetensi Keahlian :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Kompetensi Keahlian" name="kompetensi_keahlian" value="{{ $Kelas->kompetensi_keahlian}}">
              </div>
              <a href="{{ route('kelas.index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection