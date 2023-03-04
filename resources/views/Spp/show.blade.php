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
                                <h4>Detail Spp</h4>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>ID</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $Spp->id_spp }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Tahun</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>{{ $Spp->tahun }}</h7></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-start data mb-2">
                                <div class="row">
                                    <div class="col-md-3 text-start"><h7><b>Nominal</b></h7></div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-7 text-start"><h7>Rp {{ $Spp->nominal }}</h7></div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <a href="{{ route('spp.index') }}" class="btn btn-outline-warning btn-icon-text mt-4">                                                  
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection