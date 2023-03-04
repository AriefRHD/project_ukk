@extends('templatenya.main')

@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 text-center title mb-5">
                                <h4>Detail Pembayaran</h4>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>ID Petugas</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $pembayaran->id_petugas }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>NISN</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $pembayaran->nisn }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Tanggal Bayar</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $pembayaran->tgl_bayar }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Bulan Dibayar</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $pembayaran->bulan_dibayar }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Tahun Dibayar</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $pembayaran->tahun_dibayar }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>ID SPP</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $pembayaran->id_spp }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Jumlah Bayar</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>RP {{ $pembayaran->jumlah_bayar }}</h7></div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <a href="{{ route('pembayaran.index') }}" class="btn btn-outline-warning btn-icon-text mt-4">                                                  
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection