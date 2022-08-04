<?php
$url = file_get_contents('https://data.covid19.go.id/public/api/prov.json');
$data = json_decode($url, true);
$provinsi = $data['list_data'];
$jk =$provinsi[0]['jenis_kelamin'];
$jk =$provinsi[0]['jenis_kelamin'];
// var_dump($jk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Data Covid-19 ID</title>
    <link rel="shortcut icon" href="covid.svg" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

</head>
<body>

<nav class="navbar navbar-expand navbar-warning bg-warning">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#"><i class="fa fa-fw fa-home"></i> Home <span class="sr-only">(current)</span></a>
    </div>
</nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class=" alert alert-warning" role="alert">
                    <h4 class="card-title text-center">Data Covid-19 Indonesia</h4>
                </div>
                <h3> Provinsi</h3>
            </div>

            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-text text-center"> <?= $provinsi[0]['key'];?> </h4>
                        <p class="card-text text-center"> Jumlah Kasus: <?= $provinsi[0]['jumlah_kasus'];?> </p>
                        <p class="card-text text-center"> Jumlah Sembuh: <?= $provinsi[0]['jumlah_sembuh'];?> </p>
                        <p class="card-text text-center"> Jumlah Meninggal: <?= $provinsi[0]['jumlah_meninggal'];?> </p>
                        <p class="card-text text-center"> Jumlah dirawat: <?= $provinsi[0]['jumlah_dirawat'];?> </p>                        
                        <!-- <p class="card-text text-center"> Laki-laki : <?= $jk[0]['doc_count']; ?> </p>
                        <p class="card-text text-center"> Perempuan : <?= $jk[1]['doc_count']; ?> </p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-text text-center"> <?= $provinsi[1]['key'];?> </h4>
                        <p class="card-text text-center"> Jumlah Kasus: <?= $provinsi[1]['jumlah_kasus'];?> </p>
                        <p class="card-text text-center"> Jumlah Sembuh: <?= $provinsi[1]['jumlah_sembuh'];?> </p>
                        <p class="card-text text-center"> Jumlah Meninggal: <?= $provinsi[1]['jumlah_meninggal'];?> </p>
                        <p class="card-text text-center"> Jumlah dirawat: <?= $provinsi[1]['jumlah_dirawat'];?> </p>                        
                        <!-- <p class="card-text text-center"> Laki-laki : <?= $jk[0]['doc_count']; ?> </p>
                        <p class="card-text text-center"> Perempuan : <?= $jk[1]['doc_count']; ?> </p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-text text-center"> <?= $provinsi[2]['key'];?> </h4>
                        <p class="card-text text-center"> Jumlah Kasus: <?= $provinsi[2]['jumlah_kasus'];?> </p>
                        <p class="card-text text-center"> Jumlah Sembuh: <?= $provinsi[2]['jumlah_sembuh'];?> </p>
                        <p class="card-text text-center"> Jumlah Meninggal: <?= $provinsi[2]['jumlah_meninggal'];?> </p>
                        <p class="card-text text-center"> Jumlah dirawat: <?= $provinsi[2]['jumlah_dirawat'];?> </p>                        
                        <!-- <p class="card-text text-center"> Laki-laki : <?= $jk[0]['doc_count']; ?> </p>
                        <p class="card-text text-center"> Perempuan : <?= $jk[1]['doc_count']; ?> </p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-text text-center"> <?= $provinsi[3]['key'];?> </h4>
                        <p class="card-text text-center"> Jumlah Kasus: <?= $provinsi[3]['jumlah_kasus'];?> </p>
                        <p class="card-text text-center"> Jumlah Sembuh: <?= $provinsi[3]['jumlah_sembuh'];?> </p>
                        <p class="card-text text-center"> Jumlah Meninggal: <?= $provinsi[3]['jumlah_meninggal'];?> </p>
                        <p class="card-text text-center"> Jumlah dirawat: <?= $provinsi[3]['jumlah_dirawat'];?> </p>                        
                        <!-- <p class="card-text text-center"> Laki-laki : <?= $jk[0]['doc_count']; ?> </p>
                        <p class="card-text text-center"> Perempuan : <?= $jk[1]['doc_count']; ?> </p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-text text-center"> <?= $provinsi[4]['key'];?> </h4>
                        <p class="card-text text-center"> Jumlah Kasus: <?= $provinsi[4]['jumlah_kasus'];?> </p>
                        <p class="card-text text-center"> Jumlah Sembuh: <?= $provinsi[4]['jumlah_sembuh'];?> </p>
                        <p class="card-text text-center"> Jumlah Meninggal: <?= $provinsi[4]['jumlah_meninggal'];?> </p>
                        <p class="card-text text-center"> Jumlah dirawat: <?= $provinsi[4]['jumlah_dirawat'];?> </p>                        
                        <!-- <p class="card-text text-center"> Laki-laki : <?= $jk[0]['doc_count']; ?> </p>
                        <p class="card-text text-center"> Perempuan : <?= $jk[1]['doc_count']; ?> </p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-text text-center"> <?= $provinsi[5]['key'];?> </h4>
                        <p class="card-text text-center"> Jumlah Kasus: <?= $provinsi[5]['jumlah_kasus'];?> </p>
                        <p class="card-text text-center"> Jumlah Sembuh: <?= $provinsi[5]['jumlah_sembuh'];?> </p>
                        <p class="card-text text-center"> Jumlah Meninggal: <?= $provinsi[5]['jumlah_meninggal'];?> </p>
                        <p class="card-text text-center"> Jumlah dirawat: <?= $provinsi[5]['jumlah_dirawat'];?> </p>                        
                        <!-- <p class="card-text text-center"> Laki-laki : <?= $jk[0]['doc_count']; ?> </p>
                        <p class="card-text text-center"> Perempuan : <?= $jk[1]['doc_count']; ?> </p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-text text-center"> <?= $provinsi[6]['key'];?> </h4>
                        <p class="card-text text-center"> Jumlah Kasus: <?= $provinsi[6]['jumlah_kasus'];?> </p>
                        <p class="card-text text-center"> Jumlah Sembuh: <?= $provinsi[6]['jumlah_sembuh'];?> </p>
                        <p class="card-text text-center"> Jumlah Meninggal: <?= $provinsi[6]['jumlah_meninggal'];?> </p>
                        <p class="card-text text-center"> Jumlah dirawat: <?= $provinsi[6]['jumlah_dirawat'];?> </p>                        
                        <!-- <p class="card-text text-center"> Laki-laki : <?= $jk[0]['doc_count']; ?> </p>
                        <p class="card-text text-center"> Perempuan : <?= $jk[1]['doc_count']; ?> </p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-text text-center"> <?= $provinsi[7]['key'];?> </h4>
                        <p class="card-text text-center"> Jumlah Kasus: <?= $provinsi[7]['jumlah_kasus'];?> </p>
                        <p class="card-text text-center"> Jumlah Sembuh: <?= $provinsi[7]['jumlah_sembuh'];?> </p>
                        <p class="card-text text-center"> Jumlah Meninggal: <?= $provinsi[7]['jumlah_meninggal'];?> </p>
                        <p class="card-text text-center"> Jumlah dirawat: <?= $provinsi[7]['jumlah_dirawat'];?> </p>                        
                        <!-- <p class="card-text text-center"> Laki-laki : <?= $jk[0]['doc_count']; ?> </p>
                        <p class="card-text text-center"> Perempuan : <?= $jk[1]['doc_count']; ?> </p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



