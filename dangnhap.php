<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./image/fontawesome-free-5.15.3/css/all.min.css">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        background-image: url("./image/nendangnhap.jpg");
        background-size: cover;
        color: white;
    }
    .clear{
        clear: both;
    }
    .login{
        position: absolute;
        top:50%;
        left:50%;
        width:320px;
        transform:translate(-50%,-50%) ;
    }
    .login h1{
        font-size: 40px;
        border-bottom: 6px solid black;
        padding: 10px 0;
        margin-bottom: 50px;
        float: left;
        margin-left: 54px;
        color:turquoise;
    }
    .box{
        width: 100%;
        margin:10px 0;
        padding: 10px 0;
        font-size: 20px;
        border: 1px solid;
        padding-left: 10px;
    }
    .box i{
        font-size:22px;
    }
    .box input{
        background: none;
        margin-left: 15px;
        border: none;
        outline: none;
        font-size:22px;
    }
    .butt{
        width: 100%;
        background: none;
        font-size:22px;
        color: white;
        text-align: center;
        margin: 15px 0;
        padding: 12px 0;
        /*border-bottom: 2px solid #66FF66;*/
        cursor: pointer;
        background-color: #333;
    }
    .butt:hover{
        background:darkgray;
    }
    .login1{
        position: absolute;
        top:50%;
        left:50%;
        width:320px;
        transform:translate(-50%,-50%) ;
        border: 1px solid black;
        padding: 15% 13%;
        background-color: floralwhite;
        color: black;
        box-shadow: 0px 3px 50px black;
    }
</style>
<?php
    session_start();
    
    include_once("connect.php");

    if(isset($_POST['taikhoan']) && isset($_POST['password'])){
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['password'];
        $re_matkhau = md5($matkhau);

        if($taikhoan == 'admin' AND $matkhau == '123'){
            header('Location: admin.php' );
        }else{
            $sql = "SELECT * FROM `nguoidung` WHERE Taikhoan='$taikhoan' AND Matkhau='$re_matkhau'";
            $sql2 = "SELECT * FROM `nhatuyendung` WHERE Taikhoan='$taikhoan' AND Matkhau='$re_matkhau'";
            $query = mysqli_query($conn, $sql);
            $query2 = mysqli_query($conn, $sql2);
            $rows = mysqli_fetch_array($query);
            $rows2 = mysqli_fetch_array($query2);
            if($rows){
                $_SESSION['isLoggin'] = true; // da dang nhap
                $_SESSION['idUser'] = $rows['IDnd']; // id nguoi dung
                $_SESSION['test'] = '123';
                header('Location: Gtvl.php');
            }
            if($rows2){
                $_SESSION['isLoggin'] = true; // da dang nhap
                $_SESSION['idUser2'] = $rows2['IDntd']; // id nguoi dung
                $_SESSION['test'] = '123';
                header('Location: Gtvl.php');
            }else{
                echo "<div class='alert alert-danger notify'role='alert'>Tài Khoản không tồn tại</div>";
            }
        }
    }
?>
<body>
    <form action=" " method="POST" onsubmit="">
        <div class="login1">
            <div class="login">
                <h1>Đăng Nhập</h1>
                <div class="box clear">
                        <i class="fas fa-user"></i>
                    <input type="text"  name = "taikhoan" placeholder="Tài Khoản">
                </div>
                <div class="box">
                     <i class="fas fa-lock"></i>
                     <input type="password"  name ="password" placeholder="Mật Khẩu">
                </div>
                <button id="butt" type="submit" class="butt">login</button>
                <!-- <input type="button" class="butt" value="login"> -->
            </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>