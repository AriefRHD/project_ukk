@extends('templatenya.main')

@section('content')

<div class="card">
    <div class="card-body">
            <center>
                <h4 class="card-title">Edit Data Spp</h4>
            </center>
        <form action="{{ route('spp.update', $Spp->id_spp) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputUsername1">Tahun :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tahun" name="tahun" value="{{ $Spp->tahun}}">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Nominal :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nominal" name="nominal" value="{{ $Spp->nominal}}">
              </div>
              <a href="{{ route('spp.index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection