<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'admin') {
        //jika benar maka
        header("location:index.php");
    } else {
        header("location:login.php");
        echo "username atau password salah";
    }
} else {
    echo "..";
}

?>