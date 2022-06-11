<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackDiamond</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <style type="text/css">
        body {
            background: url(background_batik.png) no-repeat fixed;
            -webkit-background-size: 100% 100%;
            -moz-background-size: 100% 100%;
            -o-background-size: 100% 100%;
            background-size: 100% 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="regis.php"><b>BlackDiamond</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!--li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php"><img src="IKONS/PNG/32/home.png" alt="home" height="15" width="15"> HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="regis.php"> <img src="IKONS/PNG/32/pen_3.png" alt="registrasi" height="15" width="15"> Registrasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <img src="IKONS/PNG/32/notepad.png" alt="nilai" height="15" width="15"> Daftar Nilai</a>
                    </li-->
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="alert('Invoice Sedang di Download')"> <img src="IKONS/PNG/32/printer.png" alt="invoice" height="15" width="15"> <b>CETAK INVOICE</b></a>
                    </li>
                </ul>
                <form class="">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link"><b><?php date_default_timezone_set('Asia/Jakarta'); echo date("H:i:s"); ?></b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"> <img src="IKONS/PNG/32/calendar.png" alt="tanggal" height="15" width="15"> GANJIL 2022/2023</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <img src="IKONS/PNG/32/user.png" alt="user" height="15" width="15"> Christoper Dori
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Christoper Dori</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="login.php" onclick="alert('Terima Kasih Telah Melakukan Registrasi')">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <h5 class="mt-4">REGISTRASI</h5>
        <p>--GANJIL 2022/2023</p>
    </div>
    <div class="alert alert-danger" role="alert">
        <center><b>SETELAH SELESAI</b>, pastikan anda melakukan <a href="login.php" class="alert-link">LOGOUT</a> untuk mengakhiri <b>PROSES REGISTRASI</b>. <u>Jika tidak maka pengambilan matakuliah anda <b>AKAN DIBATALKAN.!!</b></u></center>
    </div>
    <a class="btn btn-primary mt-4" href="matkul.php" role="button"><strong><b>+</b></strong>MATAKULIAH</a>
    <br>
    <p class="mt-4"><strong> KRS / PENGAMBILAN MATAKULIAH </strong><br>
        <span class="badge rounded-pill bg-secondary">IPS 3.00</span>
        <span class="badge rounded-pill bg-secondary">IPK 3.00</span>
        <span class="badge rounded-pill bg-secondary">Total sks 24</span>
        <span class="badge rounded-pill bg-secondary">Batas maximum pengambilan 24 sks</span>
    </p>
    <table class="table table-striped table-sm bg-white">
        <thead>
            <tr>
                <th scope="col-1" class="col-1">NO</th>
                <th scope="col-2" class="col-1">KODE</th>
                <th scope="col-4" class="col-3">MATAKULIAH</th>
                <th scope="col-1" class="col-1">GRUP</th>
                <th scope="col-1" class="col-1">SKS</th>
                <th scope="col-1" class="col-1">HARGA</th>
                <th scope="col-3" class="col-2">JADWAL & RUANG</th>
                <th scope="col-2" class="col-2">DOSEN</th>
                <th scope="col-1" class="col-1">BATAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">1</td>
                <td>SI2453</td>
                <td>INTERAKSI MANUSIA DAN KOMPUTER</td>
                <td>B</td>
                <td>3</td>
                <td>3.0</td>
                <td>Rabu, 11.30-13.20 D.3.7</td>
                <td>Umi Proboyekti, S.Kom, M.LIS</td>
                <td><a href="4.php"><img src="IKONS/PNG/32/bin.png" alt="batal" height="25" width="25"></a></td>
            </tr>
            <tr>
                <td scope="row">2</td>
                <td>MH1073</td>
                <td>PENDIDIKAN PANCASILA</td>
                <td>G</td>
                <td>3</td>
                <td>3.0</td>
                <td>Kamis, 11.30-13.20 D.1.3</td>
                <td>Dra. Krisni Noor Patrianti, M.Hum</td>
                <td><a href="4.php"><img src="IKONS/PNG/32/bin.png" alt="batal" height="25" width="25"></a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>