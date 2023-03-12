<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pembayaran SPP</title>
  </head>
  <style>
    body{
        background-color: white;
    }
    .profil{
        width: 100%;
        height: 80px;
        display: flex;
        background-color: #537FE7;
    }

    #card{
        border-radius: 10px;
    }

    .textnya{
        color: white;
        margin-left: 2rem;
    }

    .data_profil{
        margin-top: 10px;
    }

    .logout{
        color: white;
        text-decoration: none;
        margin-left: 1250px;
        margin-top: 25px;

    }

    .history{
        text-shadow: 2px 2px #0000000e;
    }
    
    a{
        text-decoration: none;
    }

    #setting{
        width: 30px;
        position: absolute;
        top: 0;
        right: 0;
    }
    #listnya{
        align-items: center;
        height: 60px;
        margin-top: 13px;
        border-radius: 9px;
        background-color: #afafaf0e;
    }

    #bulan{
        opacity: 60%;
    }

  </style>
<body>
    
<nav class="profil shadow">
    <div class="data_profil">
        <h5 class="textnya">Arief Rahman Hidayat</h5>
        <h5 class="textnya">005756463</h5>
    </div>

    <div class="logoutnya">
        <a class="logout" href="{{ url('logout')}}" data-toggle="modal" style="display: flex">
            <h6 class="me-2">Logout</h6>
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
              </svg>
        </a>
    </div>
</nav>
 <br>
<div class="container">
    <div class="card shadow" id="card">
        <div class="card-body">
            <h4 class="history text-center text-secondary fw-bold m-0"><br> History Pembayaran </h4><br><hr><br>
            <div class="container-fluid">
                <div class="row">

                    <p class="text-secondary">2022</p>
                    <a href="">
                        <div class="col-md-12 shadow-sm  py-1 text-secondary" id="listnya">
                            <div class="row d-flex" id="list_history">
                                <div class="col-md-4 text-center pt-3">
                                    <h6 id="bulan">2 Januari</h6>
                                </div>
                                <div class="col-md-4 text-center pt-3">
                                    <h6>Arief Rahman Hidayat</h6>
                                </div>
                                <div class="col-md-4 text-center pt-3">
                                    
                                    <h6>Rp. 500.000</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="col-md-12 shadow-sm  py-1 text-secondary" id="listnya">
                            <div class="row d-flex" id="list_history">
                                <div class="col-md-4 text-center pt-3">
                                    <h6 id="bulan">2 Januari</h6>
                                </div>
                                <div class="col-md-4 text-center pt-3">
                                    <h6>Arief Rahman Hidayat</h6>
                                </div>
                                <div class="col-md-4 text-center pt-3">
                                    
                                    <h6>Rp. 500.000</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="col-md-12 shadow-sm  py-1 text-secondary" id="listnya">
                            <div class="row d-flex" id="list_history">
                                <div class="col-md-4 text-center pt-3">
                                    <h6 id="bulan">3 Februari</h6>
                                </div>
                                <div class="col-md-4 text-center pt-3">
                                    <h6>Arief Rahman Hidayat</h6>
                                </div>
                                <div class="col-md-4 text-center pt-3">
                                    
                                    <h6>Rp. 500.000</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="col-md-12 shadow-sm  py-1 text-secondary" id="listnya">
                            <div class="row d-flex" id="list_history">
                                <div class="col-md-4 text-center pt-3">
                                    <h6 id="bulan">1 Maret</h6>
                                </div>
                                <div class="col-md-4 text-center pt-3">
                                    <h6>Arief Rahman Hidayat</h6>
                                </div>
                                <div class="col-md-4 text-center pt-3">
                                    
                                    <h6>Rp. 500.000</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="col-md-12 shadow-sm  py-1 text-secondary" id="listnya">
                            <div class="row d-flex" id="list_history">
                                <div class="col-md-4 text-center pt-3">
                                    <h6 id="bulan">1 April</h6>
                                </div>
                                <div class="col-md-4 text-center pt-3">
                                    <h6>Arief Rahman Hidayat</h6>
                                </div>
                                <div class="col-md-4 text-center pt-3">
                                    
                                    <h6>Rp. 500.000</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="col-md-12 shadow-sm  py-1 text-secondary" id="listnya">
                            <div class="row d-flex" id="list_history">
                                <div class="col-md-4 text-center pt-3">
                                    <h6 id="bulan">1 Mei</h6>
                                </div>
                                <div class="col-md-4 text-center pt-3">
                                    <h6>Arief Rahman Hidayat</h6>
                                </div>
                                <div class="col-md-4 text-center pt-3">
                                    
                                    <h6>Rp. 500.000</h6>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

        </div>
      </div>
</div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>