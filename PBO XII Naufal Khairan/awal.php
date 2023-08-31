<?php
//$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root", "");
//if($koneksi){
  //echo "koneksi berhasil";
//}else{
  //echo "gagal koneksi";
//}
//$query = $koneksi->query("select * from pengaduan");
//$data = $query->fetchAll();
//var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bs/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar" style="background-color: #C70039;">
</nav>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Pengaduan masyarakat
    </a>
  </div>
</nav>
  <div class="container">
    <form action="backend/pengeduan_simpan.php" method="post" enctype="multipart/form-data"></form>
    <div class="mb-3">
      <label for="exampleFormControlTextareal" class="form-label"></label> 

    </div>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PDM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="cari" aria-label="cari">
        <button class="btn btn-outline-success" type="submit">Cari</button>
      </form>
    </div>
  </div>
</nav>
</div>
</body>
</html>