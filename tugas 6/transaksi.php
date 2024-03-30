<?php

    include 'koneksi.php';

    //show data
    $query = "SELECT * FROM checkout";
    $result = $conn->query($query);
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
    <div class="container pt-5 d-flex flex-column justify-content-center my-auto">

        <div class="pb-5 d-flex flex-column justify-content-center m-auto">
            <h2>Riwayat Transaksi</h2>
            <a href="form.php" class="btn btn-primary">kembali ke form</a>
        </div>
        <div class=" container d-flex flex-column">
        <?php while ($data = $result->fetch_assoc()) : ?>
            <div class="card d-flex flex-row mb-5">
                <iframe class="m-1" style="width : 100px" src="https://lottie.host/embed/46dba3ba-7f4e-424c-b005-a9dee8af31db/jzD4Px7bOe.json"></iframe>
                <div class="card-body d-flex flex-column">
                    <div class="container mt-3 mb-3 d-flex justify-content-between">
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> jenis sampah </li>
                                <li class="list-group-item"> berat sampah </li>
                                <li class="list-group-item">estimasi harga sampah</li>
                            </ul> 
                        </div>
                        <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <?= $data['jenis']?> </li>
                            <li class="list-group-item"><?= $data['berat']?> Kg</li>
                            <li class="list-group-item"><?= $data['harga']?> </li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
</body>
</html>