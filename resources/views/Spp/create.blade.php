@extends('templatenya.main')

@section('content')

<div class="row d-flex" style="justify-content: center;">

    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body p-5">
            <center>
          <h4 class="card-title">Masukkan Data Spp</h4>
            </center>
          <form action="{{ route('spp.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputUsername1">Tahun :</label>
                      <input type="text" class="form-control" placeholder="Tahun" name="tahun">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nominal :</label>
                        <input type="text" class="form-control" placeholder="Rp " name="nominal">
                    </div>

                    <div class="modal-footer">
                          <a href="{{ route('spp.index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
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