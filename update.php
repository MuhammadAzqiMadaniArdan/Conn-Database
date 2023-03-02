<?php


    require 'function.php';

    $id = $_GET["id"];
    $students =query("SELECT * FROM students WHERE id =$id")[0];

    if (isset($_POST["submit"])){

        if( updateData($_POST) >0){

         echo
         "<script>
            alert('data berhasil diubah');
            document.location.href ='tabel.php';
         </script>" ; 
         
        }
        else{
        echo
            "<script>
               alert('data gagal diubah');
               document.location.href ='tabel.php';
            </script>
            "; 

        }
    }

    
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="card" style="width: 50rem;">
    <div class="card-body">
      
      <h1>Welcome </h1>
      <h4>Lets edit your data!</h4>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="" value="<?=$students["id"]?>" id="exampleInputPassword1">
        <input type="hidden" name="gambarLama" id="" value="<?=$students["gambar"]?>" id="exampleInputPassword1">

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama: *</label>
        <br>
        <input type="text" name="nama" id="nama" class="form-control" value="<?=$students["nama"]?>" id="exampleInputPassword1">
        
        </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">NIS: *</label>
        <br>
        <input type="text" name="nis" id="" class="form-control" value="<?=$students["nis"]?>" id="exampleInputPassword1">
        
        </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Rombel: *</label>
        <br>
        <input type="text" name="rombel" id="" class="form-control" value="<?=$students["rombel"]?>" id="exampleInputPassword1">
        
        </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Rayon: *</label>
        <br>
        <input type="text" name="rayon" id="" class="form-control" value="<?=$students["rayon"]?>" id="exampleInputPassword1">
        
        </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Status: *</label>
        <br>
        <input type="text" name="status" id="" class="form-control" value="<?=$students["status"]?>" id="exampleInputPassword1">
        
        </div>
        
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Status: *</label>
        <br>
        <img src="img/<?= $students['gambar']; ?>" style="width: 50px;">
        <input type="file" name="gambar" id="" id="exampleInputPassword1">
        </div>
        <br>

        <button name="submit">submit kuy</button>

    </form>
    </div>
</div>

</body>
</html>