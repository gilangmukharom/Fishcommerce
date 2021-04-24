<?php
    require 'koneksi.php';
    
    if(isset($_POST["masuk"]))
    {
        $username = $_POST["inputusername"];
        $pass = $_POST["inputpassword"];

        $result =  mysqli_query($conn, "SELECT * FROM tsign WHERE username = '$username'");
        $hasil = mysqli_fetch_array($result);
        if($hasil)
        {
            if($pass == $hasil['userpassword'])
            {
                header("location:home2.php");
            }
            else
            {
                header("location:login2.php");
            }
        }
        else
        {
            header("location:login2.php");
        }

    }
?>