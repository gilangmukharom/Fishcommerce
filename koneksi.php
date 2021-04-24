<?php
    $host ="localhost";
    $username ="root";
    $password ="";
    $database ="user";

    $conn = new mysqli($host, $username, $password, $database);

    if($conn)
    {
        echo "Berhasil masuk!";
    }
    else{
            echo "gagal tersambung ke database!";
            exit();
    }

    function masuk($data)
    {
        global $conn;

        
    }



function registrasi($data)
    {
        global $conn;

        $username = mysqli_real_escape_string($conn, $data["inputusername"]);
        $pass = mysqli_real_escape_string($conn, $data["inputpassword"]);
        $email = mysqli_real_escape_string($conn, $data["inputemail"]);
        $nohp = mysqli_real_escape_string($conn, $data["inputnohp"]);

        
        mysqli_query($conn, "INSERT INTO tsign VALUES('', '$username', '$pass', '$email', '$nohp')");

        return mysqli_affected_rows($conn);
    }

    
?>