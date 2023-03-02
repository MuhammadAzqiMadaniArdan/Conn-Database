<?php


    require 'function.php';

    if (isset($_POST["submit"])){

        if( tambahdata($_POST) >0){

         echo
         "<script>
            alert('data berhasil dimasukkan');
            document.location.href ='tabel.php';
         </script>" ; 
         
        }
        else{
        echo
            "<script>
               alert('data gagal dimasukkan');
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
      
      <h1>Hai,Selamat Datang</h1>
      <h4>Put your data!</h4>
    
    <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama: *</label>
        <br>
        <input type="text" class="form-control" name="nama" id="exampleInputPassword1">
      </div>
      
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">NIS: *</label>
        <br>
        <input type="text" class="form-control" name="nis" id="exampleInputPassword1">
      </div>
    
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Rombel: *</label>
        <br>
        <input type="text" class="form-control" name="rombel" id="exampleInputPassword1">
      </div>
      
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Rayon: *</label>
        <br>
        <input type="text" class="form-control" name="rayon" id="exampleInputPassword1">
      </div>
      
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Status: *</label>
        <br>
        <input type="text" class="form-control" name="status" id="exampleInputPassword1">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Gambar: *</label>
        <br>
        <input type="file" class="form-control" name="gambar" id="exampleInputPassword1">
      </div>
    
      <br>
    
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</div>
      
</body>
</html>