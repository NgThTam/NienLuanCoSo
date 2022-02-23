<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./image/fontawesome-free-5.15.3/css/all.min.css">
</head>
<?php
    include_once("connect.php");

    //dangtuyendung
    if(isset($_POST['tuyendung'])){
        $tieude = $_POST['tieudetd'];
        $noidung = $_POST['noidungtd'];
        $mucluong = $_POST['mucluongtd'];
        $yeucau = $_POST['yeucaucn'];

        //xu ly anh

        $target_dir = "E:/xampp/htdocs/NienLuan/image/";
        $target_file = $target_dir.basename($_FILES["anh"]["name"]);
        $file_name =
        basename($_FILES["anh"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $upload_ok = true;
        $is_exist = false;

        if ($_FILES['anh']['name'] == '') { 
            echo "<script>
                    alert('Ảnh không được để trống!');
                    window.location.href = 'admin.php';
                </script>";
            $upload_ok = false;
        }
       //kiemtra file ton tai chua
        if (file_exists($target_file)) {
            $is_exist = true;
        }
        //kiemtra kieu
        if ($imageFileType != "jpg" and $imageFileType != "png" and $imageFileType != "jpeg") {
            echo "<script>
                    alert('Định dạnh file không hợp lệ');
                    window.location.href = 'admin.php';
                </script>";
            $upload_ok = false;
        }
        if($is_exist == false){
            if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                $sql = "select * from dangtuyendung ";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($query);
                $idtd = randomId(5);

                $sql = "INSERT INTO
                `dangtuyendung`(`IDtd`,`TDtd`,`NDtd`,`Mucluong`,`Anhtd`,`yeucaucn`)
                VALUES('$idtd','$tieude','$noidung','$mucluong','$file_name','$yeucau')";
                
                if(mysqli_query($conn,$sql)){
                    echo "<script>
                    alert('Thêm thành công');
                    window.location.href = 'admin.php';
                    </script>";
                }
            }
        }else{
                $sql = "select * from dangtuyendung ";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($query);
                $idtd = randomId(5);

                $sql = "INSERT INTO
                `dangtuyendung`(`IDtd`,`TDtd`,`NDtd`,`Mucluong`,`Anhtd`,`yeucaucn`)
                VALUES('$idtd','$tieude','$noidung','$mucluong','$file_name','$yeucau')";
                
                if(mysqli_query($conn,$sql)){
                    echo "<script>
                    alert('Thêm thành công');
                    window.location.href = 'admin.php';
                    </script>";
                }
        }


    }


    $action = "";
    $tkhoan = "";
    // Xoa nguoi dung
    if(isset($_GET['action'] )){
        $action =  $_GET['action'];
    }
    if(isset($_GET['name'] )){
        $tkhoan =  $_GET['name'];
    }
    if(isset($action)){
        $sql = "DELETE FROM `nguoidung` WHERE Taikhoan='$tkhoan'";
        $query = mysqli_query($conn,$sql);
    }
    if(isset($action)){
        $sql = "DELETE FROM `nhatuyendung` WHERE Taikhoan='$tkhoan'";
        $query = mysqli_query($conn,$sql);
    }

    //xoa bai dang
    $action = "";
    $IDtd = "";

    if(isset($_GET['action'] )){
        $action =  $_GET['action'];
    }

    if(isset($_GET['IDtd'])){
        $IDtd = $_GET['IDtd'];
    }
    if(isset($action)){
        $sql = "DELETE FROM `dangtuyendung` WHERE IDtd='$IDtd'";
        $query = mysqli_query($conn,$sql);
    }

    function randomId($n){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }
    // Duyet Bai
    if(isset($_GET['idtd'])){
        $idtd = isset($_GET['idtd']) ? $_GET['idtd'] : '';
        $sql_update = "UPDATE `dangtuyendung` SET`trangthai`='2' WHERE IDtd='$idtd'";
        if(mysqli_query($conn,$sql_update)){
            echo "<script>
                    alert('Duyệt bài thành công');      
                    window.location.href = 'admin.php';              
                </script>";
        }
    }
    
?>
<style>
    *{
        margin : 0;
        padding : 0;
        box-sizing: border-box;
    }
    .header{
        width: 100%;
        height:6rem;
        /* background-color: darkgray; */
        display:flex;
        justify-content: space-between;
        align-items:center;
        background:none;
    }
    .name{
        text-align: center;
        color:aqua;
        padding-left:5px;
    }
    .hello{
        text-align: center;
        padding-left:10px;
        /* margin-left:3rem; */
    }
    .chao{
        text-align: center;
        color:white;
        user-select:none;
        margin-left:2rem;
    }
    .dangxuat{
        font-weight:500;
        color: black;
        /* padding-right: 3rem; */
    }
    .dangxuat:hover{
        text-decoration: none;
        color:white;
        font-weight:500;
    }
    .navv:hover{
        background-color: gray;
    }
    .avatar{
        width: 100%;
        height:10rem;
        background: center;
        
    }
    .ava{
        width:5rem;
        border-radius:145px;
    }
    .tab {
        width: 10%;
        overflow: hidden;
        border: 2px solid #ccc;
        background-color: #f1f1f1;
        display:flex;
        flex-direction: column;
        
      }
      
      /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }
    
    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ccc;
    }
    
    /* Create an active/current tablink class */
    .tab button.active {
        background-color: rgba(241, 203, 99, 0.568);
    }
    
    /* Style the tab content */
    .tabcontent {
        width: 90%;
        display: none;
        padding: 6px 12px;
        border-top: none;
        /* height:34.4rem; */
        height:36rem;
    }
    .menu {
        display:flex;
        padding:2rem;
    }
    .tdmenu{
        text-align: center;
        border-bottom: 3px solid #ccc;
        padding:10px;
        user-select:none;
    }
    .tuyendung{
        display:flex;
        flex-direction: column;
    }
    .noidung{

        padding-bottom: 76px;
    }
    .form_tuyendung{
        padding:0 3rem 0 3rem;
    }
    .khung{
        padding:1rem;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }
    .anh{
        width: fit-content;
    }
    .but{
        width: 6rem;
        height:2.5rem;
        margin-top:10px;
        border: none;
        background-image: linear-gradient(160deg, #0077B6, #00B4D8);
        border-radius:10px;
    }
    .but:hover{
        box-shadow: rgb(255 0 0) 0px 2px 27px;
        cursor: pointer;
    }
    .butt{
        display:flex;
        justify-content: flex-end;
    }
    .tuyendung{
        padding-bottom: 10px;
    }
    #upload h3{
        text-align: center;
        /* background-color:rgba(241, 203, 99, 0.568) ; */
        background-color: rgb(250 208 91 / 75%);
        padding-bottom: 5px;
        padding-top:5px;
        margin: 0;
        border: 1px solid #ccc;
        text-transform: uppercase;
    }
    #upload{
        padding-top: 0;
    }
    #upload label{
        font-weight:650;
    }
    #user h3{
        text-align: center;
        /* background-color:rgba(241, 203, 99, 0.568) ; */
        background-color: rgb(250 208 91 / 75%);
        padding-bottom: 5px;
        padding-top:5px;
        margin: 0;
        border: 1px solid #ccc;
        text-transform: uppercase;
    }
    .khung1{
        padding:1rem;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        height:33rem;
    }
    #user{
        padding-top:0;
    }
    .khung2{
        padding:1rem;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        height:33rem;
        overflow:auto;
    }
    #update h3{
        text-align: center;
        /* background-color:rgba(241, 203, 99, 0.568) ; */
        background-color: rgb(250 208 91 / 75%);
        padding-bottom: 5px;
        padding-top:5px;
        margin: 0;
        border: 1px solid #ccc;
        text-transform: uppercase;
    }
    #update{
        padding-top:0;
    }
    /*table thong tin*/
    .table{
        box-shadow: rgb(0 0 0 / 15%) 0px 2px 20px;
    }
    .table th{
        font-weight:900;
        text-align: center;
    }
    .table tbody{
        text-align: center;
    }
    .table th, .table td{
        vertical-align:baseline;
    }
    body{
        background-image: url(./image/admin1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .navv{
        width:6rem;
        text-align: center;
        background-color:aqua;
        border-radius:15px;
        margin-right:3rem;
        height:35px;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    #usertd h3{
        text-align: center;
        /* background-color:rgba(241, 203, 99, 0.568) ; */
        background-color: rgb(250 208 91 / 75%);
        padding-bottom: 5px;
        padding-top:5px;
        margin: 0;
        border: 1px solid #ccc;
        text-transform: uppercase;
    }
</style>
<body>
    <div class="header">
        <div class="chao">
            <img class="ava" src="./image/ava.jpg" alt="">
            <span class="hello">Chào:</span>
            <span class="name">Admin</span>
        </div>
        <div class="navv">
            <a href="./Gtvl.php" class="dangxuat">Đăng xuất</a>
        </div>
    </div>
    <!-- <section class="avatar" style="background-image:url(./image/admin.jpg)"></section> -->
    <div class="menu">
        
        <div class="tab">
            <h4 class="tdmenu">Danh mục</h4>
            <button class="tablinks" onclick="openCity(event, 'user')">Người dùng</button>
            <button class="tablinks" onclick="openCity(event, 'usertd')">Nhà T/Dụng</button>
            <button class="tablinks" onclick="openCity(event, 'update')">Tuyển dụng</button>
            <button class="tablinks" onclick="openCity(event, 'upload')">Đăng bài TD</button>
        </div>

        <div id="user" class="tabcontent">
            <h3>Thông tin người dùng</h3>
            <div class="khung1">
                <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Họ</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Tài Khoản</th>
                        <th scope="col">SĐT</th>
                        <th scope="col">Email</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM `nguoidung` WHERE 1";
                            $query = mysqli_query($conn,$sql);
                            $i = 1;
                            while( $nguoidung = mysqli_fetch_array($query)){
                                
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i++ ?></th>
                                <td><?php echo $nguoidung['IDnd'] ?></td>
                                <td><?php echo $nguoidung['Ho'] ?></td>
                                <td><?php echo $nguoidung['Ten'] ?></td>
                                <td><?php echo $nguoidung['Taikhoan'] ?></td>
                                <td><?php echo "0", $nguoidung['Sodienthoai'] ?></td>
                                <td><?php echo $nguoidung['Email'] ?></td>
                                <td><a href="/NienLuan/admin.php?name=<?php echo $nguoidung['Taikhoan']?>&action=delete"><i class="fas fa-trash-alt" style="font-size:24px;"></i> </a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
            </div>
        </div>
        
        <div id="usertd" class="tabcontent">
            <h3>Thông tin nhà tuyển dụng</h3>
            <div class="khung1">
                <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">ID</th>
                        <th scope="col">Tên Cty</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Tài Khoản</th>
                        <th scope="col">Email</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM `nhatuyendung` WHERE 1";
                            $query = mysqli_query($conn,$sql);
                            $i = 1;
                            while( $nguoidung = mysqli_fetch_array($query)){
                                
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i++ ?></th>
                                <td style="width: 80px;height:80px;padding-right: 30px;">
                                        <img src="./image/<?php echo $nguoidung['Anhdd'] ?>" alt="" style="width: 80px;height:80px;object-fit: cover;border:1px solid;">
                                </td>
                                <td><?php echo $nguoidung['IDntd'] ?></td>
                                <td><?php echo $nguoidung['TenCty'] ?></td>
                                <td><?php echo $nguoidung['DiachiCty'] ?></td>
                                <td><?php echo $nguoidung['Taikhoan'] ?></td>
                                <td><?php echo $nguoidung['Email'] ?></td>
                                <td><a href="/NienLuan/admin.php?name=<?php echo $nguoidung['Taikhoan']?>&action=delete"><i class="fas fa-trash-alt" style="font-size:24px;"></i> </a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
            </div>
        </div>

        <div id="update" class="tabcontent">
            <h3>BÀI TUYỂN DỤNG</h3>
            <div class="khung2">
                <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ẢNH</th>
                            <th scope="col">IDtd</th>
                            <th scope="col">TIÊU ĐỀ</th>
                            <th scope="col">NỘI DUNG</th>
                            <th scope="col">MỨC LƯƠNG</th>
                            <th scope="col">NGƯỜI ĐĂNG</th>
                            <th scope="col">TRẠNG THÁI</th>
                            <th scope="col">DUYỆT</th>
                            <th scope="col">XÓA</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql_dangtuyen = "SELECT * FROM `dangtuyendung`";
                                $query = mysqli_query($conn,$sql_dangtuyen);
                                $i = 1;
                                while( $tuyendung = mysqli_fetch_array($query)){
                                    
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $i++ ?></th>
                                    <td style="width: 80px;height:80px;padding-right: 30px;">
                                        <img src="./image/<?php echo $tuyendung['Anhtd'] ?>" alt="" style="width: 80px;height:80px;object-fit: cover;border:1px solid;">
                                    </td>
                                    <td ><?php echo $tuyendung['IDtd'] ?> </td>
                                    <td><?php echo $tuyendung['TDtd'] ?></td>
                                    <td><?php echo $tuyendung['NDtd'] ?></td>
                                    <td><?php echo number_format($tuyendung['Mucluong'],0,',','.');?></td>
                                    <td>
                                        <?php 
                                            $IDntd = $tuyendung['IDntd'];
                                            $sql = "SELECT * FROM nhatuyendung WHERE IDntd='$IDntd'" ;
                                            $query2 = mysqli_query($conn,$sql);
                                            if($row = mysqli_fetch_array($query2)){
                                               echo $row['TenCty'] ;                                            
                                            }else{
                                                echo "admin";
                                            }
                                        ?>
                                    </td>
                                    <td><?php if($tuyendung['trangthai'] == 2) {
                                        echo "<span class='badge badge-pill badge-success'>đã duyệt</span>";
                                    }else{
                                        echo "<span class='badge badge-pill badge-secondary'>chưa được duyệt</span>";
                                    };
                                    ?></td>
                                    <td><a href="/NienLuan/admin.php?idtd=<?php echo $tuyendung['IDtd']  ?>&trangthai=duyetbai"><i class="fas fa-check" style="font-size: 25px;"></i></a></td>
                                    <td><a href="/NienLuan/admin.php ?IDtd=<?php echo $tuyendung['IDtd']?>&action=delete"><i class="fas fa-times" style="font-size: 28px;color:red;"></i> </a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>

        <div id="upload" class="tabcontent">
            <h3>Đăng tuyển dụng</h3>
            <form action="#" method="POST" onsubmit="" enctype="multipart/form-data">
                <div class="khung">
                    <div class="form_tuyendung">
                        <div class="tuyendung">
                            <label for="name">Tiêu đề tuyển dụng <label>(<label style="color:red">*</label>)</label></label>
                            <input type="text" name="tieudetd" class="tieude" >
                        </div>
                        <div class="tuyendung">
                            <label for="name">Nội dung tuyển dụng <label>(<label style="color:red">*</label>)</label></label>
                            <!-- <input type="text" name="noidungtd" class="noidung" placeholder="vd:mô tả vị trí cần tuyển"> -->
                            <textarea class="noidung" name="noidungtd" placeholder="vd:mô tả vị trí cần tuyển"></textarea>
                        </div>
                        <div class="tuyendung">
                            <label for="name">Yêu cầu chuyên ngành </label>
                            <input type="text" name="yeucaucn" class="mucluong" placeholder="vd: khoa học máy tính">
                        </div>
                        <div class="tuyendung">
                            <label for="name">Mức lương <label>(<label style="color:red">*</label>)</label></label>
                            <input type="number" name="mucluongtd" class="mucluong" placeholder="...vnđ">
                        </div>
                        <div class="tuyendung">
                            <label for="name">Ảnh mô tả  <label>(<label style="color:red">*</label>)</label></label>
                            <input type="file" name="anh" id="anh" class="anh" required>
                        </div>
                        <div class="butt">
                            <button type="submit" name="tuyendung" class="but">Upload</button>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>

</div>
</body>
<script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Box icons -->
<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
</html>