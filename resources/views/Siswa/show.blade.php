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
                                <h4>Detail Siswa</h4>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>NISN</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $siswa->nisn }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>NIS</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $siswa->nis }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Nama</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $siswa->nama }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>ID Kelas</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $siswa->id_kelas }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>ID Kelas</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $siswa->id_kelas }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Alamat</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $siswa->alamat }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>No Telp</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $siswa->no_telp }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>ID SPP</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $siswa->id_spp }}</h7></div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <a href="{{ route('siswa.index') }}" class="btn btn-outline-warning btn-icon-text mt-4">                                                  
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection