<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">SiPerak</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                        <br>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Aspirasi</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <br>
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">About us</span></a>
                            </li>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br> 
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
        <h1 class="center">Form Aspirasi</h1>
        <div class="row">
                        <div class="form-group">
                            <label for="id_transaksi" style="margin-left:15px;display:inline;">Nama :</label>
                            <input type="text" placeholder="Nama Lengkap" name="id_transaksi" style="margin-left:150px;width:50%;display:inline;" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group">
                            <label for="id_transaksi" style="margin-left:15px;display:inline;">N I K :</label>
                            <input type="text" placeholder="N I K" name="id_transaksi" style="margin-left:160px;width:52%;display:inline;" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group">
                            <label for="id_transaksi" style="margin-left:15px;display:inline;">Aspirasi :</label>
                            <textarea type="text" placeholder="Aspirasi Anda"  name="id_transaksi" style="margin-left:150px;width:180%;height:280%;display:inline;" class="form-control"></textarea>
        </div>
    </div>
</div>
</body>
</html>