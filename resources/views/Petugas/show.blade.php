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
                                <h4>Detail Petugas</h4>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>ID</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $Petugas->id_petugas }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Nama Petugas</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $Petugas->nama_petugas }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Username</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $Petugas->username }}</h7></div>
                                </div>
                            </div>
                            {{-- <hr class="bg-danger border-2 border-top border-danger">
                            <div class="col-md-12 text-start data mb-2 text-center">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Password</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h4>{{ $Petugas->password }}</h4></div>
                                </div>
                            </div> --}}
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Level</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $Petugas->level }}</h7></div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <a href="{{ route('petugas.index') }}" class="btn btn-outline-warning btn-icon-text mt-4">                                                  
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection