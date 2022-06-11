<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
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
            <a class="navbar-brand" href="#"><b>BlackDiamond</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                                <li><a class="dropdown-item" href="login.php">Logout</a></li>
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
    <center><b>KETIKA ANDA SUDAH SELESAI</b>, pastikan anda melakukan <a href="login.php" class="alert-link">LOGOUT</a> untuk mengakhiri <b>PROSES REGISTRASI</b>. <u>Jika anda tidak melakukan tindakan tersebut, maka pengambilan matakuliah anda <b>TIDAK TERSIMPAN DAN DINYATAKAN BATAL!!</b></u></center>
    </div>
    <div class="alert alert-warning" role="alert">
        Sisa sks yang dapat diambil 15
    </div>
    <a href="regis.php" class="btn btn-outline-dark"><strong><b><h4><</h4></b></strong></a>
    <form class="row g-3 mt-1">
        <div class="col-4">
            <input type="text" class="form-control" id="inputPassword2" placeholder="Cari Matakuliah">
        </div>
        <div class="col-auto">
            <div class="dropdown">
                <a class="dropdown-toggle btn btn-secondary" href="matkul.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    --Pilih Semester--
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="2.php">2</a></li>
                    <li><a class="dropdown-item" href="4.php">4</a></li>
                    <li><a class="dropdown-item" href="6.php">6</a></li>
                    <li><a class="dropdown-item" href="7.php">7</a></li>
                    <li><a class="dropdown-item" href="8.php">8</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="bebas.php">Pilihan Bebas</a></li>
                </ul>
            </div>
        </div>
    </form>
    <table class="table table-striped bg-white mt-2">
        <thead>
            <tr align="center">
                <th scope="col">NO</th>
                <th scope="col">KODE</th>
                <th scope="col">MATAKULIAH</th>
                <th scope="col">NILAI</th>
                <th scope="col">SKS</th>
                <th scope="col">HARGA</th>
                <th scope="col">KELAS</th>
                <th scope="col">KETERANGAN</th>
                <th scope="col">SYARAT</th>
                <th scope="col">PILIH</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" style="text-align: center">1</th>
                <td style="text-align: center">SI1423</td>
                <td>Algoritma dan Struktur Data</td>
                <td></td>
                <td style="text-align: center">3</td>
                <td style="text-align: center">6</td>
                <td style="text-align: center">2</td>
                <td></td>
                <td style="text-align: center"><button class="btn btn-success">LIHAT</button></td>
                <td style="text-align: center"><button class="btn btn-primary">PILIH</button></td>
            </tr>
            <tr>
                <th scope="row" style="text-align: center">2</th>
                <td style="text-align: center">SI1433</td>
                <td>Analisis dan Perancangan Sistem Informasi</td>
                <td></td>
                <td style="text-align: center">3</td>
                <td style="text-align: center">3</td>
                <td style="text-align: center">2</td>
                <td></td>
                <td style="text-align: center"><button class="btn btn-success">LIHAT</button></td>
                <td style="text-align: center"><button class="btn btn-primary">PILIH</button></td>
            </tr>
            <tr>
                <th scope="row" style="text-align: center">3</th>
                <td style="text-align: center">SI1453</td>
                <td>Analisis Proses Bisnis</td>
                <td></td>
                <td style="text-align: center">3</td>
                <td style="text-align: center">3</td>
                <td style="text-align: center">2</td>
                <td></td>
                <td style="text-align: center"><button class="btn btn-success">LIHAT</button></td>
                <td style="text-align: center"><button class="btn btn-primary">PILIH</button></td>
            </tr>
            <tr>
                <th scope="row" style="text-align: center">4</th>
                <td style="text-align: center">MH2023 </td>
                <td>Apresiasi seni</td>
                <td></td>
                <td style="text-align: center">3</td>
                <td style="text-align: center">3</td>
                <td style="text-align: center">1</td>
                <td></td>
                <td style="text-align: center"><button class="btn btn-success">LIHAT</button></td>
                <td style="text-align: center"><a class="btn btn-primary" href="#">PILIH</a></td>
            </tr>
            <tr>
                <th scope="row" style="text-align: center">5</th>
                <td style="text-align: center">MH2033</td>
                <td>Apresiasi seni musik</td>
                <td></td>
                <td style="text-align: center">3</td>
                <td style="text-align: center">3</td>
                <td style="text-align: center">2</td>
                <td></td>
                <td style="text-align: center"><button class="btn btn-success">LIHAT</button></td>
                <td style="text-align: center"><a class="btn btn-primary" href="#">PILIH</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>