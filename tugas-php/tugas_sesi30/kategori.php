<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .box {
            width: 500px;
            border: solid;
            padding: 15px;
        }
    </style>
</head>

<body class=>
    <div class="box d-flex justify-content-center">
        <form method="post" action="">
            <h5>Menghitung Nilai BMI</h5><br>

            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama" aria-label="Username" aria-describedby="basic-addon1"><br>
            <div class="input-group mb-3">
                <input type="text" name="beratbadan" id="beratbadan" class="form-control" placeholder="Masukkan Berat Badan" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">kg</span><br>
            </div>
            <div class="input-group mb-3">
                <input type="text" id="tinggibadan" name="tinggibadan" class="form-control" placeholder="Masukkan Tinggi Badan" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">m</span><br>
            </div>
            <button type="submit" class="btn btn-primary">Hitung BMI</button>
        </form>
    </div>

    <?php
    $nama = $_POST['nama'];
    $tinggi = $_POST['tinggibadan'];
    $berat = $_POST['beratbadan'];
    $bmi = $berat / ($tinggi * $tinggi);
    echo "<br><br>Halo " . $nama . "! Nilai BMI Anda adalah " . $bmi . ". Anda termasuk ";
    if ($bmi <= 18.4) {
        echo "Kurus.";
    } else if ($bmi >= 18.5 && $bmi <= 25.0) {
        echo "Sedang.";
    } else if ($bmi >= 25.1) {
        echo "Gemuk.";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>