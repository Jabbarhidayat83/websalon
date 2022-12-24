<?php
session_start();

include 'function.php';

if (isset($_POST['submit'])) {
    //Ngambil data dari form
    $layanan = $_POST['layanan'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_telepon = $_POST['no_telepon'];
    $cabang = $_POST['cabang'];
    $waktu_reservasi = $_POST['waktu_reservasi'];
    $sql4 = "INSERT INTO reservasi (nama_lengkap, no_telepon, layanan, cabang, waktu_reservasi) 
    VALUES ('$nama_lengkap', '$no_telepon', '$layanan', '$cabang', '$waktu_reservasi')";
    $q4 = mysqli_query($koneksi, $sql4);
    if ($q4) {
        $success = "Berhasil reservasi";
        if ($success) {
            header("refresh:1;url=reservasi.php");
        }
    } else {
        $error = "Gagal reservasi";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPB Garage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/regist.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
    .mx-auto {
        width: 1000px;
    }

    .card {
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">IPB Garage</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="data-motor.php">Kembali</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="form-pembeli.php">Registrasi Motor</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header"> Form Registrasi Motor </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
                <?php
                }
                ?>
                <?php
                if ($success) {
                ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success; ?>
                </div>
                <?php
                }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <!-- NAMA LENGKAP -->
                    <div class="mb-3 row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">nama lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Masukkan nama" class="form-control" id="nama_lengkap"
                                name="nama_lengkap" value="<?php echo $nama_lengkap ?>" required>
                        </div>
                    </div>
                    <!-- NOMOR TELEPON -->
                    <div class="mb-3 row">
                        <label for="no_telepon" class="col-sm-2 col-form-label">no telepon</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Masukkan no telepon" class="form-control" id="no_telepon"
                                name="no_telepon" value="<?php echo $no_telepon ?>" required>
                        </div>
                    </div>

                    <!-- lAYANAN -->
                    <label for="layanan" class="col-sm-2 col-form-label">layanan</label>
                    <div class="form-check">
                    <input type="checkbox" name="layanan[]" value="Pedicure"> Pedicure<br><?php if ($layanan=="pedicure")
                                    echo "selected" ?>
                        </label>
                    </div>
                    <div class="form-check">
                    <input type="checkbox" name="layanan[]" value="Manicure"> Manicure<br><?php if ($layanan=="manicure")
                                    echo "selected" ?>
                        </label>
                    </div>
                    <div class="form-check">
                    <input type="checkbox" name="layanan[]" value="Haircut"> Haircut<br>  <?php if ($layanan=="haircut")
                                    echo "selected" ?>
                     </label>
                    </div>
                   
                     <!-- CABANG -->
                     <div class="mb-3 row">
                        <label for="cabang" class="col-sm-2 col-form-label">cabang</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="cabang" name="cabang" required>
                                <option value="">Pilih cabang</option>
                                <option value="Jakarta" <?php if ($cabang=="Jakarta")
                                    echo "selected" ?>>Jakarta
                                </option>
                                <option value="Bekasi" <?php if ($cabang=="Bekasi")
                                    echo "selected" ?>>Bekasi</option>
                                <option value="Bogor" <?php if ($cabang=="Bogor")
                                    echo "selected" ?>>Bogor
                                </option>
                                <option value="Tangerang" <?php if ($cabang=="Tangerang")
                                    echo "selected" ?>>Tangerang
                                </option>
                            </select>
                        </div>
                    </div>

                     <!-- WAKTU_RESERVASI -->
                     <div class="mb-3 row">
                        <label for="waktu_reservasi" class="col-sm-2 col-form-label">waktu reservasi</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="waktu_reservasi" name="waktu_reservasi" required>
                                <option value="">Pilih waktu reservasi</option>
                                <option value="Morning" <?php if ($layanan=="Morning")
                                    echo "selected" ?>>Morning (09.00 - 12.00)
                                </option>
                                <option value="Noon" <?php if ($layanan=="Noon")
                                    echo "selected" ?>>Noon (12.00 - 15.00)
                                </option>
                                <option value="Afternoon" <?php if ($layanan=="Afternoon")
                                    echo "selected" ?>>Afternoon (15.00 - 18.00)
                                </option>
                                <option value="Night" <?php if ($layanan=="Night")
                                    echo "selected" ?>>Night (18.00 - 20.00)
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="submit" name="submit" value="Registrasi" class="btn btn-dark">
                    </div>
                </form>
            </div>
        </div>