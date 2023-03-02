<?php

if(isset($_POST["submit"] )){

    if($_POST["user"] == "Azqi" && $_POST["Pw"] == "12543"){
        header("Location:tabel.php");
    }
    else{
        $error =true;
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
 
  
  
    <div class="card" style="width: 18rem;margin-top:10%;">
      
    <div class="card-body">
      <h2 class="card-title">KUY LOGIN!</h2>
      <div class="wrng">
        <?php if(isset($error)) :?>
          <p>Password/Username salah</p>
          <?php endif; ?>
        </div>
    <p class="card-text"></p>
    <form action="" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" name="user" id="exampleInputEmail1">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <br>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"h>Password</label>
        <input type="password" class="form-control" name="Pw" id="exampleInputPassword1">
      </div>
      <!-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
      <br>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    
  </div>
  
</div>

</body>
</html>