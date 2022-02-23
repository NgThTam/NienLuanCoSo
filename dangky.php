<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Đăng Ký tài khoản người dùng</title>
</head>
<?php

include_once("connect.php");

function randomId($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re_password'])){
    $hodem = $_POST['lastName'];
    $ten = $_POST['firstName'];
    $taikhoan = $_POST['name'];
    $matkhau = $_POST['password'];
    $re_matkhau = $_POST['re_password'];
    $sodienthoai = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "select * from nguoidung WHERE Taikhoan='$taikhoan'";
    $sql1 = "select * from nhatuyendung where Taikhoan='$taikhoan'";
    $query = mysqli_query($conn, $sql);
    $query1 = mysqli_query($conn, $sql1);
    $row = mysqli_num_rows($query);
    $row1 = mysqli_num_rows($query1);

    if($row > 0 or $row1 > 0){
        echo "<div class='alert alert-danger notify'role='alert'>Tài khoản đã tồn tại!</div>";
    }else{
        if($matkhau != $re_matkhau){
            echo "<div class='alert alert-danger notify'role='alert'>Mật khẩu không khớp</div>";

        }else{
            $IDnd = randomId(5);
            $matkhauhoanchinh = md5($matkhau);
            $sql = "INSERT INTO
            `nguoidung`(`IDnd`,`Ho`,`Ten`,`Taikhoan`,`Matkhau`,`Sodienthoai`,`Email`)
            VALUES('$IDnd','$hodem','$ten','$taikhoan','$matkhauhoanchinh','$sodienthoai','$email')";
            mysqli_query($conn,$sql);
            // header("location: dangnhap.html");
            echo "<div class='alert alert-success' role='alert'>
                    Chúc mừng bạn đã đăng ký thành công ^.^ <a href='./dangnhap.php' class='lkdangnhap'>Vào đây</a> để đăng nhập.
                </div>";
        }
    }

}

?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    html {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    form {
        width: 550px;
        padding: 20px;
        border: 2px solid #023E8A;
        margin: 60px auto;
        background-color: white;
        border-radius: 4px;
        box-shadow: 0px 2px 30px black;
    }
    
    h2 {
        margin-bottom: 20px;
        font-size: 32px;
    }
    
    .form-group {
    
        margin: 10px 0;
    
    }
    
    .form-group label {
        margin-right: 20px;
    }
    
    .form-group input {
        width: 100%;
        height: 40px;
        margin-top: 5px;
        font-size: 16px;
        padding: 10px;
        border-top: transparent;
        border-left: transparent;
        border-right: transparent;
        border-bottom: 2px solid #03045E;
    }
    .form-group input:focus{
        border: 1px solid inherit;
        outline: none;
    }
    body {
        background-image: url("./image/bac1.jpg");
        background-size: cover;
    }
    
    #submit {
        width: 100px;
        height: 40px;
        border: none;
        outline: none;
        background: linear-gradient(160deg, #0077B6, #00B4D8);
        padding: 2px 10px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        text-transform: uppercase;
        display: block;
        margin-top: 10px;
        color: black;
        border-radius:17px;
    }
    
    .noti {
        color: red;
        width: 100%;
        display: block;
        font-size: 14px;
    }
    .nut{
        display: flex;
        justify-content: space-around;
    }
    #submit:hover{
        color:aliceblue;
        box-shadow: 1px 3px 10px grey;
    }
    .alert{
        text-align: center;
        user-select: none;
    }
    .lkdangnhap{
        text-decoration:underline;
    }
    .lkdangnhap:hover{
        text-decoration:none;
        color: #d37407;
    }
</style>
<body>
    <form action="#" method="POST" onsubmit="return validateForm()">
        <h2 style="text-align:center;">Đăng ký tài khoản hệ thống</h2>
        <div class="form-group">
            <label for="name">Tên đăng nhập(<span style='color:red'>*</span>)</label>
            <span id='noti_name' class='noti'></span>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">

            <label for="password">Password(<span style='color:red'>*</span>)</label>
            <span id='noti_password' class='noti'></span>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">

            <label for="re_password">Nhập lại Password(<span style='color:red'>*</span>)</label>
            <span id='noti_re_password' class='noti'></span><input type="password" name="re_password" id="re_password"
                required>
        </div>
        <div class="form-group">

            <label for="lastName">Họ và tên đệm của bạn(<span style='color:red'>*</span>)</label><input type="text" name="lastName" id="lastName" required>

        </div>
        <div class="form-group">

            <label for="firstName">Tên của bạn(<span style='color:red'>*</span>)</label>
            <input type="text" name="firstName" id="firstName" required>
        </div>
        <div class="form-group">

            <label for="email">Email(<span style='color:red'>*</span>)</label>
            <span id='noti_email' class='noti'></span>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">

            <label for="phone">Số điện thoại(<span style='color:red'>*</span>)</label>
            <span id='noti_phone' class='noti'></span><input type="number" name="phone" id="phone" required>
        </div>
        <div class="nut">
            <button id="submit" type="submit">Đăng ký</button>
            <button onclick="window.location.href='./Gtvl.php'" id="submit" type="submit">Trở Lại</button>
        </div>
    </form>

    <!-- <button id="submit">Đăng ký</button> -->

</body>
<script>
    // function isEmail(email) {
    //     const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //     return re.test(String(email).toLowerCase());
    // }

    // function isPassword(value) {
    //     const re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,16}$/;
    //     return re.test(value);
    // }

    // function isMatch(password, re_password) {
    //     if (password === re_password) {
    //         return true;
    //     }
    //     return false;
    // }
    // function isLEngth(value) {
    //     if (value.length === 12) {
    //         return true;
    //     }
    //     return false;
    // }



 function validateForm() {

        var name = document.getElementById("name").value;
        var password = document.getElementById("password").value;
        var re_password = document.getElementById("re_password").value;
        var lastName = document.getElementById("lastName").value;
        var firstName = document.getElementById("firstName").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;



        const rePassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,16}$/;
        const rePassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,16}$/;
        if (password) {
            if (!rePassword.test(password)) {
                document.getElementById("noti_password").innerHTML = "mật khẩu tối thiểu 8 và tối đa 16 ký tự, ít nhất một ký tự hoa và một ký tự thường"
                return false;
            } else {
                document.getElementById("noti_password").innerHTML = ""

            }
        }

        if (password !== re_password) {
            document.getElementById("noti_re_password").innerHTML = "mật khẩu không khớp";
            return false;
        } else {
            document.getElementById("noti_re_password").innerHTML = "";
        }
        const reEmail = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!reEmail.test(String(email).toLowerCase())) {
            document.getElementById("noti_email").innerHTML = "Email không đúng định dạng";
            return false;
        } else {
            document.getElementById("noti_email").innerHTML = "";
        }
        if (phone.length !== 10) {
            document.getElementById("noti_phone").innerHTML = "số điện thoại phải gồm 10 chữ số";
            return false;
        } else {
            document.getElementById("noti_phone").innerHTML = "";
        }
        return true;
    }


</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>