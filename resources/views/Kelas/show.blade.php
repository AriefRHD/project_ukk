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
                                <h4>Detail Kelas</h4>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>ID</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $Kelas->id_kelas }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Nama Kelas</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $Kelas->nama_kelas }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Kompetensi Keahlian</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $Kelas->kompetensi_keahlian }}</h7></div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <a href="{{ route('kelas.index') }}" class="btn btn-outline-warning btn-icon-text mt-4">                                                  
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection