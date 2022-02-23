<?php
    $dbhost="localhost";
    $dbuser="nguyenthanhtam";
    $dbpass="123456789";
    $dbname="quanlynguoidung";

    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if($conn){
        mysqli_query($conn,"SET NAMES 'utf8'");
    }else{
        echo "Bạn đã kết nối thất bại!".mysqli_connect_error();
    }
?>