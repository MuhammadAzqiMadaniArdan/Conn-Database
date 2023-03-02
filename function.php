<?php
    $conn = mysqli_connect("localhost", "root", "", "db_azqi1");

    function query($query){
        global $conn;
        $hasil = mysqli_query($conn, $query);
        $box = [];
        while ( $baju = mysqli_fetch_assoc($hasil) ){
            $box[] = $baju;
        }
        return $box;
    }

    function tambahdata ($data){
        
        global $conn;
        $nama =htmlspecialchars($data["nama"]);
        $nis =htmlspecialchars($data["nis"]);
        $rombel =htmlspecialchars($data["rombel"]);
        $rayon =htmlspecialchars($data["rayon"]);
        $status =htmlspecialchars($data["status"]);

        $gambar = upload();
        if( !$gambar ){
            return false;
        }

        $query ="INSERT INTO students 
            VALUES
            ('','$nama','$nis','$rombel','$rayon','$status','$gambar')";

        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);

    }

    function upload(){

        $namaFile= $_FILES['gambar']['name'];
        $ukuranFile= $_FILES['gambar']['size'];
        $error= $_FILES['gambar']['error'];
        $tmpName= $_FILES['gambar']['tmp_name'];

        //cek apakah tidak ada gambar yang diupload
        if ($error === 4){
            echo "<script>
                    alert('pilih gambar terlebih dahulu!');
                </script>";
            return false;
        }

        //cek apakah yang diupload gambar?
        $ekstensiGambarValid=['jpg','jpeg','png','jfif'];
        $ekstensiGambar= explode('.',$namaFile);
        $ekstensiGambar= strtolower( end($ekstensiGambar));
        if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
            echo "<script>
                    alert('harap hanya upload file gambar!');
                </script>";
            return false;
        }

        //mengecek ukuran gambar
        if($ukuranFile > 1000000){
            echo "<script>
                    alert('Ukuran gambar terlalu besar!');
                </script>";
            return false;
        }

         //lolos pengecekan,gambar dan upload
         //generate nama gambar
         $namaFileBaru = uniqid();
         $namaFileBaru .= '.';
         $namaFileBaru .= $ekstensiGambar;

         move_uploaded_file($tmpName, 'img/' .$namaFileBaru);
 
         return $namaFileBaru;
    }

    function deleteDate($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM students WHERE id=$id");

    return mysqli_affected_rows($conn);
    }

    function updateData ($data){

        global $conn;
        $id =$data["id"];
        $nama =htmlspecialchars($data["nama"]);
        $nis =htmlspecialchars ($data["nis"]);
        $rombel =htmlspecialchars($data["rombel"]);
        $rayon =htmlspecialchars($data["rayon"]);
        $status =htmlspecialchars($data["status"]);
        $gambarLama =htmlspecialchars($data["gambarLama"]);
        
        //pengecekan pilahan gambar user
        if($_FILES['gambar']['error'] == 4){
            $gambar = $gambarLama;
        }
        else{

            $gambar = upload();
        }


        $query ="UPDATE students SET
                    nama='$nama',
                    nis='$nis',
                    rombel='$rombel',
                    rayon='$rayon',
                    status='$status',
                    gambar='$gambar'
                    WHERE id =$id
                ";

        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);


    }
    
    
    function cari($keyword){
        $query= "SELECT * FROM students
                    WHERE
                nama LIKE '%$keyword%' OR
                nis LIKE '%$keyword%' OR
                rombel LIKE '%$keyword%' OR
                rayon LIKE '%$keyword%' OR
                status LIKE '%$keyword%'
                ";
        
            return query($query);
        
        
    }
?>