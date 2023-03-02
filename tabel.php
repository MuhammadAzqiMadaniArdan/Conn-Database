
<?php
    require 'function.php';

    $students = mysqli_query($conn, "SELECT * FROM students");
    
    if(isset($_POST["cari"])== $students ){
      $students =cari($_POST["keyword"]);
    }
    else{
      $error =true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi ke database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container-sm">
    <div class="card" style="width: 75rem;margin-top:15%;margin-bottom:15%;">
      <div class="card-body">
        <h2>This your Data!</h2>
        <br>
        
        <form action="" method="post">
          <div class="search">
            <input type="text" name="keyword" size="40" autofocus placeholder="input search keyword.."
          autocomplete="off">
          <button type="submit" name="cari"><img src="img/srch.png"></button>
        </div>
      
        </form>
        <br>
        <table class="table table-bordered">
          
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
          <th scope="col">Nis</th>
          <th scope="col">Rombel</th>
          <th scope="col">Rayon</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
          <th scope="col">Gambar</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1?>
            <?php foreach( $students as $student ) { ?>
                <tr>
                    <td><?=$i;?></td>
                    <td><?= $student["nama"];?></td>
                    <td><?= $student["nis"];?></td>
                    <td><?= $student["rombel"];?></td>
                    <td><?= $student["rayon"];?></td>
                    <td><?= $student["status"];?></td>
                    <td>
                      <div class="move">
                        <a href="delete.php?id=<?= $student["id"];?>"onclick="return confirm('yakin data ingin dihapus?')">
                        <img src="img/hapus1.png"style="width:50px;"></a>
                        
                        <a href="update.php?id=<?= $student["id"];?>"><img src="img/edit1.png" style="width:87px;"></a>
                      </div>
                    </td>
                    <div class="gmbr">
                      <td><img src="img/<?= $student["gambar"];?>" style="width:100px;"></td>
                    </div>
                </tr>
                <?php $i++;?>
            <?php } ?>
        </tr>
        </tbody>
        
      </table>
      <div class="add">
        
        <br>
        
        <a href="input-data.php"><img src="img/add.png"></a>
        <br>
        <div class="add-text">
        <a href="input-data.php">Add Your Data!</a>
        </div>
      </div>
      <br>
      <div class="back">
        
      <button type="submit"><a href="tabel.php">Kembali</a></button>
    </div>

    </div>
        
      </div>
  </div>
  

</body>
</html>
