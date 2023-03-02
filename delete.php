<?php

    require 'function.php';

    $id = $_GET["id"];

        if( deleteDate ($id) >0){

         echo
         "<script>
            alert('data berhasil dihapus');
            document.location.href ='tabel.php';
         </script>" ; 
         
        }
        else{
        echo
            "<script>
               alert('data gagal dihapus');
               document.location.href ='tabel.php';
            </script>
            "; 

        }
    

?>