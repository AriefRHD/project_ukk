@extends('templatenya.main')

@section('content')

<div class="row d-flex" style="justify-content: center;">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body p-5">
          <center>
          <h4 class="card-title">Tambah Data Pembayaran</h4>
          </center>
          <form action="{{ route('pembayaran.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">ID Petugas :</label>
                        <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_petugas">
                        @foreach ($petugas as $item)
                        <option value="{{ $item->id_petugas}}">{{ $item->nama_petugas}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">NISN :</label>
                        <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="nisn">
                        @foreach ($siswa as $item)
                        <option value="{{ $item->nisn}}">{{ $item->nisn}} {{ $item->nama}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Tanggal Bayar :</label>
                      <input type="date" class="form-control" id="exampleInputUsername1" placeholder="Tanggal Bayar" name="tgl_bayar">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Bulan Di Bayar :</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Bulan Di Bayar" name="bulan_dibayar">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Tahun Di Bayar :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tahun Di Bayar" name="tahun_dibayar">
                      </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">ID SPP :</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_spp">
                        @foreach ($spp as $item)
                        <option value="{{ $item->id_spp}}">{{ $item->tahun }} Rp{{ $item->nominal}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Jumlah Bayar :</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Jumlah Bayar" name="jumlah_bayar">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Keterangan :</label>
                      <select name="keterangan" class="form-control">
                            <option value="">Lunas / Belum Lunas</option>
                            <option value="Lunas">Lunas</option>
                            <option value="Belum">Belum lunas</option>
                      </select>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('pembayaran.index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
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