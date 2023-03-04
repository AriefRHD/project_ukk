@extends('templatenya.main')

@section('content')

<div class="row d-flex" style="justify-content: center;">

    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body p-5">
          <center>
          <h4 class="card-title">Tambah Data Siswa</h4>
          </center>
          <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputUsername1">NISN :</label>
                      <input type="number" class="form-control" id="exampleInputUsername1" placeholder="NISN" name="nisn">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">NIS :</label>
                      <input type="number" class="form-control" id="exampleInputUsername1" placeholder="NIS" name="nis">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Lengkap :</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Lengkap" name="nama">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Kelas :</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_kelas">
                        @foreach ($kelas as $item)
                        <option value="{{ $item->id_kelas}}">{{ $item->nama_kelas}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleTextarea1">Alamat :</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Alamat Lengkap" name="alamat"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nomor Telepon :</label>
                      <input type="number" class="form-control" id="exampleInputUsername1" placeholder="Telepon" name="no_telp">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Tahun :</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_spp">
                        @foreach ($spp as $item)
                        <option value="{{ $item->id_spp}}">{{ $item->tahun }} Rp{{ $item->nominal}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="modal-footer">
                        <a href="{{ route('siswa.index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
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