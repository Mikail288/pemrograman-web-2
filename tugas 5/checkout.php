<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    $jenis = $_POST['jenis'];
    $berat = $_POST['berat'];

    include 'harga.php';
    //buat objek
    $sampah =  new Sampah($jenis, $berat);
    $harga = $sampah->Harga() ;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>Document</title>
</head>
<body>
<div class="container mt-5 d-flex justify-content-center">
    <div class="card" style="width: 500px;">
        <iframe class="mt-5" src="https://lottie.host/embed/46dba3ba-7f4e-424c-b005-a9dee8af31db/jzD4Px7bOe.json"></iframe>

        <div class="card-body d-flex flex-column">
            <h5 class="card-title m-auto">checkout tukar sampah</h5>
                <div class="container mt-5 mb-5 d-flex justify-content-between">
                    <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> jenis sampah </li>
                            <li class="list-group-item"> berat sampah </li>
                            <li class="list-group-item">estimasi harga sampah</li>
                        </ul> 
                    </div>
                    <div>
                    <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <?= $jenis?> </li>
                            <li class="list-group-item"><?= $berat?> Kg</li>
                            <li class="list-group-item"><?= $harga?> </li>
                        </ul> 
                    </div>

                </div>
                <div class=" m-auto">
                    <a href="#" class="btn btn-primary">konfirmasi penjemputan</a>
                </div>
        </div>
    </div>
</div>
</body>
</html>