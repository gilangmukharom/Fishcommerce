<?php

    require 'koneksi.php';

    if(isset($_POST["register"]))
    {
        if(registrasi($_POST)>0)
        {
            echo "<script> alert ('Registrasi berhasil!');</script>";
            header("location:home2.php");
            
        }
        else{
            echo mysqli_error($conn);
        }
    }
?>