@extends('templatenya.main')

@section('content')

<div class="card">
    <div class="card-body">
        <center>
            <h4 class="card-title">Edit Data Pembayaran</h4>
        </center>
        <form action="{{ route('pembayaran.update', $pembayaran->id_pembayaran) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlSelect2">ID Petugas :</label>
                <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_petugas">
                  @foreach ($petugas as $item)
                  <option value="{{ $item->id_petugas}}">{{ $item->nama_petugas }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">NISN :</label>
                <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="nisn">
                  @foreach ($siswa as $item)
                  <option value="{{ $item->nisn}}">{{ $item->nisn }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Tanggal Bayar :</label>
                <input type="date" class="form-control" id="exampleInputUsername1" name="tgl_bayar" value="{{$pembayaran->tgl_bayar }}">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Bulan Dibayar :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" name="bulan_dibayar" value="{{$pembayaran->bulan_dibayar }}">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Tahun Dibayar :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" name="tahun_dibayar" value="{{$pembayaran->tahun_dibayar }}">
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
                <label for="exampleInputUsername1">Jumlah Dibayar :</label>
                <input type="number" class="form-control" id="exampleInputUsername1" name="jumlah_bayar" value="{{$pembayaran->jumlah_bayar }}">
            </div>
              <a href="{{ route('siswa.index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection