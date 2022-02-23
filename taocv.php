<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Việc làm</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="./image/fontawesome-free-5.15.3/css/all.min.css">
  <link rel="stylesheet" href="./base.css"> 
</head>
<?php 
    session_start();
    include_once('./connect.php');

    function randomId($n){
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $randomString = '';
  
      for ($i = 0; $i < $n; $i++) {
          $index = rand(0, strlen($characters) - 1);
          $randomString .= $characters[$index];
      }
      return $randomString;
    }

    if(isset($_SESSION['isLoggin'])){            
      if(isset($_SESSION['idUser'])){
        $id = $_SESSION['idUser'];
        $sql = "SELECT * FROM `nguoidung` WHERE IDnd='$id'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($query);
      }
    }

    if(isset($_SESSION['isLoggin'])){
      if(isset($_SESSION['idUser'])){
        $id = $_SESSION['idUser'];
        if(isset($_POST['submit'])){
          $vitri = $_POST['vitri'];
          $sinhnhat = $_POST['sinhnhat'];
          $diachi = $_POST['diachicn'];
          $kynang = $_POST['kynang'];
          $kinhnghiem = $_POST['kinhnghiem'];
          $hocvan = $_POST['hocvan'];
          $idcv = randomId(5);
          $idnd = $id;

          $sql1 = "select * from thongtincv";
          $query1 = mysqli_query($conn,$sql1);

          $sql1 = "INSERT INTO 
          `thongtincv`(`IDcv`,`VitriUT`,`Sinhnhat`,`DiachiND`,`Kynang`,`Hocvan`,`Kinhnghiem`,`IDnd`)
          VALUES ('$idcv','$vitri','$sinhnhat','$diachi','$kynang','$hocvan','$kinhnghiem','$idnd')";

          if(mysqli_query($conn,$sql1)){
            echo "<script>
            alert('Tạo CV thành công');
            window.location.href = 'taocv.php';
            </script>";
          }
        }
        if(isset($_POST['submit1'])){
          
          $vitri = $_POST['vitri'];
          $sinhnhat = $_POST['sinhnhat'];
          $diachi = $_POST['diachicn'];
          $kynang = $_POST['kynang'];
          $kinhnghiem = $_POST['kinhnghiem'];
          $hocvan = $_POST['hocvan'];
          $idcv = randomId(5);
          $idnd = $id;

          $sql1 = "UPDATE `thongtincv` SET 
          `IDcv`='$idcv',
          `VitriUT`='$vitri',
          `Sinhnhat`='$sinhnhat',
          `DiachiND`='$diachi',
          `Kynang`='$kynang',
          `Hocvan`='$hocvan',
          `Kinhnghiem`='$kinhnghiem'
           WHERE `IDnd`='$idnd'";

          if(mysqli_query($conn,$sql1)){
            echo "<script>
            alert('Cập nhật thành công');
            window.location.href = 'taocv.php';
            </script>";
          }
        }
      }
    }
?>
<style>
    body{
      background-image:url("./image/backvl.jpg");
    }
    .anh-tuyen-dung{
      width:100%;
      height:100px;
      object-fit:cover;
      margin-bottom:20px;
      height:17rem;
    }
    .tuyen-dung{
      position: relative;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0,0,0,.125);
      border-radius: .25rem;
    }
    .mucluong{
      font-size:initial;
      color: #0cc20c;
      font-weight: 500;
    }
    .noidung{
      font-size:15px;
      margin-bottom: 3px;
    }
    .tieude{
      margin-bottom:10px;
      color:rgb(211, 65, 12);
      text-decoration: none;
    }
    .tuyen-dung:hover{
      box-shadow: rgb(26 6 199 / 50%) 0px 5px 15px;
    }
    .cardbot{
      margin-bottom:20px;
    }
    .link_footer a{
      text-decoration: none;
    }
    .cv{
      margin: 50px auto;
      width:65%;
      background-color: #0db4a5;
      padding-bottom: 20px;
      border: 1px solid;
      box-shadow: 3px 4px 20px grey;
    }
    .noidungcv{
      background-color: #0db4a5;
      width: 100%;
    }
    .topcv{
      padding-bottom: 40px;
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    .avatar{
      background-color: #039382;
      border-bottom-right-radius: 155px;
      border-bottom-left-radius: 155px;
      /* float: right; */
      width: 155px;
      height: 195px;
      margin-right: 20px;
      text-align: center;
      padding-top: 55px;
    }
    .avatar img{
      width: 130px;
      height: 130px;
      border-radius: 130px;
    }
    .name{
      padding-right: 3rem;
      color:white;
    }
    .anhdd{
      padding-left: 11rem;
    }
    .nd1{
      width: 100%;
      display: flex;
      padding-bottom: 1rem;
    }
    .thongtin {
      width: 40%;
    }
    .lienhe{
      width: 40%;
      margin-left: 11rem;
    }
    .asd{
      padding: 5px 0 0 25px;
      color: #007457;
      border-bottom-right-radius: 155px;
      border-top-right-radius: 155px;
      height: 44px;
      width: 100%;
      background-color: white;
    }
    .cv li{
      list-style: none;
      font-size: 16px;
      color: white;
      padding: 0.5rem 0px;
      width: 100%;
    }
    .kinhnghiem{
      width: 100%;
    }
    .kinhnghiem .asd{
      width: 40%;
    }
    .vitri{
      color:white;
      font-size: 17px;
      width: 19rem;
      height: 2rem;
      background: none;
      border: none;
      border-bottom: 1px solid black;
    }
    .sinhnhat{
      color:antiquewhite;
      background: none;
      border: none; 
      border-bottom: 1px solid black;
    }
    ::placeholder{
      color:antiquewhite;
    }
    .diachi{
      color:white;
      font-size: 17px;
      width: 19rem;
      background: none;
      border: none;
      border-bottom: 1px solid black;
    }
    .kynang{
      color:white;
      width: 19rem;
      height: 10rem;
      font-size: 17px;
      background: none;
      border: none;
      border-bottom: 1px solid black;
    }
    .hocvan{
      color:white;
      font-size: 17px;
      background: none;
      border: none;
      border-bottom: 1px solid black;
    }
    .submit{
      width: 8rem;
      height: 40px;
      border: none;
      outline: none;
      background-color:#039382;
      padding: 2px 10px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      text-transform: uppercase;
      display: block;
      margin-top: 10px;
      color: white;
      border-radius: 17px;
    }
    .butsub{
      padding-right: 2.5rem;
      display: flex;
      justify-content: flex-end;
    }
    .submit:hover{
      box-shadow: 1px 3px 10px floralwhite;
    }
</style>
<body>
  <div class="app">
  <?php include_once('./header.php');?>
    <div class="main">
        <div class="body">
        <form action="#" method="POST">
            <div class="cv">
              <div class="noidungcv">
                <div class="topcv">
                  <div class="anhdd">
                    <div class="avatar">
                      <img src="./image/anhcv.jpg" alt="">
                    </div>
                  </div>
                  <div class="name">
                    <h2><?php echo $row['Ho'].' '.$row['Ten']?></h2>
                    <input class="vitri" name="vitri" type="text" placeholder="vị trí mong muốn ứng tuyển">
                  </div>
                </div>
                <div class="nd1">
                  <div class="thongtin">
                    <h3 class="asd"><span>Thông tin</span></h3>
                    <ul class="list_thongtin">
                      <li class="item_thongtin">
                        <label style="padding-right:5px">Sinh nhật : </label>
                        <input class="sinhnhat" name="sinhnhat" type="date" >
                      </li>
                      <li class="item_thongtin">
                        <label>Quốc tịch : </label>
                          Việt Nam
                      </li>
                      <li class="item_thongtin">
                        <label>Quốc gia : </label>
                          Việt Nam
                      </li>
                    </ul>
                  </div>
                  <div class="lienhe">
                    <h3 class="asd"><span>Liên hệ</span></h3>
                    <ul class="list_lienhe">
                      <li class="item_lienhe">
                        <label><i style="padding-right:10px" class="fas fa-phone-alt"></i></label>
                          <?php echo '0'.$row['Sodienthoai'];?>
                      </li>
                      <li class="item_lienhe">
                        <label><i style="padding-right:10px" class="fas fa-envelope"></i></label>
                          <?php echo $row['Email']; ?>
                      </li>
                      <li class="item_lienhe">
                        <label><i style="padding-right:10px" class="fas fa-home"></i></label>
                          <input class="diachi" name="diachicn" type="text" placeholder="Địa chỉ">
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="nd1">
                  <div class="thongtin">
                    <h3 class="asd"><span>Kỹ năng</span></h3>
                    <ul class="list_thongtin">
                      <textarea class="kynang" name="kynang" placeholder="vd: kỹ năng giao tiếp ..."></textarea>
                    </ul>
                  </div>
                  <div class="lienhe">
                    <h3 class="asd"><span>Học vấn</span></h3>
                    <ul class="list_lienhe">
                      <li class="item_lienhe">
                        <label>Bằng cấp cao nhất : </label>
                        <input class="hocvan" name="hocvan" type="text" placeholder="vd: đại học">
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="nd1">
                  <div class="kinhnghiem">
                    <h3 class="asd"><span>Kinh nghiệm làm việc</span></h3>
                    <ul class="list_thongtin">
                      <textarea style="width:57rem;" name="kinhnghiem" class="kynang" placeholder="vd: 06/2016 – 06/2017 Chức danh – Tên công ty &#10   Thành tựu đạt được : ....."></textarea>
                    </ul>
                  </div>
                </div>
                <div class="butsub">
                  <?php 
                      if(isset($_SESSION['isLoggin'])){
                        if(isset($_SESSION['idUser'])){
                          $id = $_SESSION['idUser'];
                          $sql3 = "SELECT * FROM thongtincv WHERE IDnd='$id'";
                          $query3 = mysqli_query($conn,$sql3);
                          $row3 = mysqli_num_rows($query3);
                        if($row3 > 0){
                  ?>
                            <button class="submit" name="submit1" id="submit" type="submit">Cập nhật</button>
                  <?php 
                        }else{
                  ?>
                          <button class="submit" name="submit" id="submit" type="submit">Hoàn Thành</button>
                  <?php }}} ?>
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
    <div class="footer">
      <div class="container_footer">
        <div class="body_footer">
          <div class="colum_footer">
            <div class="link_footer">
              <h3>Dành cho ứng viên</h3>
              <li>
                <a href="#">Việc làm mới nhất</a>
              </li>
              <li>
                <a href="#">CV hay</a>
              </li>
              <li>
                <a href="#">Cẩm Nang</a>
              </li>
              <li>
                <a href="#">IT Blogs</a>
              </li>
              <li>
                <a href="#">Ứng Dụng Di Động</a>
              </li>
              <li>
                <a href="#">Sơ Đồ Trang Web</a>
              </li>
            </div>
          </div>
          <div class="colum_footer">
            <div class="link_footer">
              <h3>Nhà Tuyển Dụng</h3>
              <li>
                <a href="#">Đăng Tuyển Dụng</a>
              </li>
              <li>
                <a href="#">Tìm Hồ Sơ</a>
              </li>
              <li>
                <a href="#">Giải Pháp Talent Solution</a>
              </li>
              <li>
                <a href="#">Sản Phẩm Dịch Vụ</a>
              </li>
            </div>
          </div>
          <div class="colum_footer">
            <div class="link_footer">
              <h3>Trung Tâm Trợ Giúp</h3>
              <li>
                <a href="#">Về Trang chủ</a>
              </li>
              <li>
                <a href="#">Chính Sách BV Thông Tin</a>
              </li>
              <li>
                <a href="#">Chính sách GDPR</a>
              </li>
              <li>
                <a href="#">Quy chế sàn giao dịch</a>
              </li>
              <li>
                <a href="#">Thỏa thuận sử dụng</a>
              </li>
              <li>
                <a href="#">Quy định bảo mật</a>
              </li>
              <li>
                <a href="#">QT Giải Quyết Tranh Chấp</a>
              </li>
              <li>
                <a href="#">Trợ giúp</a>
              </li>
            </div>
          </div>
          <div class="colum_footer">
            <div class="link_footer">
              <h3>Website Đối Tác</h3>
              <li>
                <a href="#">Vieclam.vieclam.vn</a>
              </li>
              <li>
                <a href="#">Vieclam.vn</a>
              </li>
              <li>
                <a href="#">VieclamIT.vn</a>
              </li>
              <li>
                <a href="#">Liên Hệ</a>
              </li>
            </div>
          </div>
          <div class="colum_footer">
            <div class="app_link">
              <h3>Tìm Kiếm Mọi Lúc Mọi Nơi</h3>
              <div class="img_app_link viewqr">
                  <div class="qr">
                    <img src="./image/qr.png" alt="qr" class="imgqr">
                    <div class="ungdung">
                      <a href="#" class="qr_link">
                        <img src="./image/chpl.png" alt="chplay" class="qr_item">
                      </a>
                      <a href="#" class="qr_link">
                        <img src="./image/store.png" alt="apple" class="qr_item">
                      </a> 
                    </div>
                  </div>
                <a href="#">
                  <img src="./image/apple.png" alt="app" class="lazy">
                </a>
                <a href="#">
                  <img src="./image/android.png" alt="app" class="lazy">
                </a>
              </div>
            </div>
            <div class="icon_link">
              <h3>Kết Nối</h3>
              <div class="item_icon_link">
                <a href="#">
                  <i class="fab fa-facebook-square"></i>
                </a>
                <a href="#" class="instar">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="youtube">
                  <i class="fab fa-youtube"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>