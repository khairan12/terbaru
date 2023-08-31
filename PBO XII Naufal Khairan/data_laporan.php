<?php
$koneksi = new PDO ("mysql:host=localhost;dbname=pengaduan_masyrakat",'root','');
$query=$koneksi->query("select * from pengaduan");
$data=$query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
    <link rel="stylesheet" href="./bs/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <center><h1 style="margin-top: 50px;" text;>Status pengaduan</h1></center>
    <br>
    <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">id_pengaduan</th>
      <th scope="col">tgl_pengaduan</th>
      <th scope="col">nik</th>
      <th scope="col">isi laporan</th>
      <th scope="col">foto</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">

  <?php foreach ($data as $data) { ?>
  
    <tr>
      <th scope="row"></th>
      <td><?= $data['id_pengaduan'] ?></td>
      <td><?= $data['tgl_pengaduan']?></td>
      <td><?= $data['nik']?></td>
      <td><?= $data['isi_laporan']?></td>
      <td><?= $data['foto']?></td>
      <td><?= $data['status']?></td>
      <td><a href="hapus_data.php?id=<?php echo $data['id_pengaduan']?>" class="btn btn-danger">hapus</a>
      <button type="button" class="btn btn-success">ubah</button>
    </td>
    </tr>
    

    <?php }
    ?>
    
  </tbody>
</table>
</div>
</body>
</html>