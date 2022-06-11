<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">REGISTRASI</a>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-4 justify-content-evenly">
            <div class="col-3">
                <div class="row">
                    <div class="p-3 border bg-light"><strong>LOGIN MAHASISWA.</strong></div>
                    <div class="p-3 border bg-white">
                        <form class="mt-1" action="regis.php">
                            <div class="mb-4">
                                <b>NIM</b>
                                <input type="text" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <b>Password</b>
                                <input type="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-outline-dark">LOGIN</button>
                        </form>
                    </div>
                    <div class="p-3 border bg-light">Jam Server <b><?php date_default_timezone_set('Asia/Jakarta'); echo date("H:i:s"); ?>WIB</b></div>
                </div>
            </div>
            <div class="col-8">
                <div class="p-3 border bg-light"><strong>INFORMASI REGISTRASI</strong></div>
                    <div class="p-3 border bg-white">
                        <?php echo date("d-m-Y H:i:s"); ?><br>
                        <strong>PENGUMUMAN REGISTRASI SEMESTER GANJIL 2022/2023</strong><br>
                        <table class="table table-bordered mt-3">
                            <tr>
                                <td></td>
                                <td><b>KEGIATAN PRODI</b></td>
                                <td><b>TANGGAL</b></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Registrasi Matakuliah 2022</td>
                                <td>20-07-2022</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Registrasi Matakuliah 2022</td>
                                <td>20-07-2022</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Registrasi Matakuliah 2022</td>
                                <td>20-07-2022</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Registrasi Matakuliah 2022</td>
                                <td>20-07-2022</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Registrasi Matakuliah 2022</td>
                                <td>20-07-2022</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>