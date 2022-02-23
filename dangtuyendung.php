<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Tuyển Dụng</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="./image/fontawesome-free-5.15.3/css/all.min.css">
  <link rel="stylesheet" href="./base.css">
</head>

<?php
  session_start();
  include_once("connect.php");
  $idUser2 = isset($_SESSION['idUser2']) ? $_SESSION['idUser2'] : '';

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
    if($idUser2 != ''){
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
    
        if($_FILES["anh"]["name"] == ''){
          echo "<script>
                  alert('Ảnh không được để trống!');
                  window.location.href = 'dangtuyendung.php';
              </script>";
          $upload_ok = true;
        }
        //kiem tra file da co san chua
        if(file_exists($target_file)){
          $is_exist = true;
        }
    
        //kiem tra type
    
        if($imageFileType != "jpg" and $imageFileType != "png" and $imageFileType != "jpeg"){
          echo "<script>
                        alert('Định dạnh file không hợp lệ');
                        window.location.href = 'dangtuyendung.php';
                    </script>";
          $upload_ok = false;
        }
        //xu ly form
        if($is_exist == false){
          if(move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)){
            $sql = "SELECT * from dangtuyendung";
            $query = mysqli_query($conn,$sql);
            $idtd = randomId(5);
    
            $sql = "INSERT INTO `dangtuyendung`(`IDtd`,`TDtd`,`NDtd`,`Mucluong`,`Anhtd`,`IDntd`,`yeucaucn`)
                   value('$idtd','$tieude','$noidung','$mucluong','$file_name','$idUser2','$yeucau')";
            
            if(mysqli_query($conn,$sql)){
              echo "<script>
              alert('Thêm thành công');
              window.location.href = 'dangtuyendung.php';
              </script>";
            }
          }
        }else{
          $sql = "select * from dangtuyendung ";
          $query = mysqli_query($conn, $sql);
          $idtd = randomId(5);
    
          $sql = "INSERT INTO
          `dangtuyendung`(`IDtd`,`TDtd`,`NDtd`,`Mucluong`,`Anhtd`,`IDntd`,`yeucaucn`)
          VALUES('$idtd','$tieude','$noidung','$mucluong','$file_name','$idUser2','$yeucau')";
          
          if(mysqli_query($conn,$sql)){
              echo "<script>
              alert('Thêm thành công');
              window.location.href = 'dangtuyendung.php';
              </script>";
          }
        }
      }
    }else{
      echo "<script>
      alert('Bạn phải đăng nhập tài khoản nhà tuyển dụng');
      window.location.href = 'Gtvl.php';
      </script>";
    }
  }else{
    echo "<script>
            alert('Đăng nhập để đăng bài');
            window.location.href = 'dangnhap.php';
            </script>";
  };
  

?>

<style>
    .form_td{
      margin-top: 5rem;
      width: 100%;
      /* height:40rem; */
      display: flex;
      justify-content:center;

    }
    .form_dtd{
      border: 1px solid;
      width:60%;
      height:100%;
      padding: 40px;
      background-color: whitesmoke;
      box-shadow: 0px 1px 34px black;
    }
    body{
      /* background-color:aliceblue; */
      background-image: url(./image/bac1.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
    .form_dtd textarea{
      width:100%;
      height:5rem;
      font-size:17px;
    }
    .hmh{
      font-size:17px;
      width:20rem;
      padding-top: 10px;
    }
    .asd{
      width:100%;
      height:40px;
      font-size:17px;
    }
    
    .buttd{
      display:flex;
      justify-content: space-around;
      padding-top:3rem;
    }
    .buttd button{
      width: 7rem;
      height:2.7rem;
      background: linear-gradient(160deg,#0077B6,#00B4D8);
      font-size:initial;
      font-weight: 400;
      border-radius:20px;
      font-weight: 600;
      cursor:pointer;
    }
    .buttd button:hover{
      box-shadow: 2px 5px 7px black;
      color: white;
    }
    .form_td h5{
      padding-top: 18px;
      padding-bottom: 5px;
    }
    .header{
      background-image: none;
    }
    .my-nav-list li,i{
      color: white;
    }
    .my-nav-item a{
      color: white;
    }
    .my-nav-item:hover{
      color: aqua;
    }
    .my-nav-item a:hover{
      color: aqua;
    }
    .my-nav-list i:hover{
      color:aqua;
    }
    .drd_menu a{
      color:black;
    }
    .drd_menu a:hover{
      color:black;
    }
    .body{
      min-height:809px;
    }
</style>

<body>
  <div class="app">
  <?php include_once('./header.php');?>
    <div class="main">
        <div class="body">
          <div class="form_td">
              <form action="#" onsubmit="" method="POST"  class="form_dtd" enctype="multipart/form-data">
                <h3 style="text-align: center;">ĐĂNG TUYỂN DỤNG</h3>
                <div class="tieude">
                  <h5>Tiêu đề (<span style="color:red;">*</span>)</h5>
                  <input class="asd" type="text" name="tieudetd" placeholder="vd: tên công ty">
                </div>
                <div class="noidung">
                  <h5>Nội dung tuyển dụng  (<span style="color:red;">*</span>)</h5>
                  <textarea name="noidungtd" placeholder="vd: vị trí cần tuyển"></textarea>
                </div>
                <div class="yeucau">
                  <h5>Yêu cầu chuyên ngành</h5>
                  <input class="asd" name="yeucaucn" type="text" placeholder="vd: khoa học máy tính">
                </div>
                <div class="mucluong">
                  <h5>Mức lương  (<span style="color:red;">*</span>)</h5>
                  <input class="asd" name="mucluongtd" type="number" placeholder="vnđ">
                </div>
                <div class="hinhanh">
                  <h5>Hình ảnh minh họa - logo công ty  (<span style="color:red;">*</span>)</h5>
                  <input class="hmh" name="anh" type="file">
                </div>
                <div class="buttd">
                  <button onclick="window.location.href='./Gtvl.php'" id="submit" type="submit">TRỞ LẠI</button>
                  <button type="submit" name="tuyendung" id="submit">UPLOAD</button>
                </div>
              </form>
          </div>
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
                  <i class="fab fa-facebook-square" style="color:blue"></i>
                </a>
                <a href="#" class="instar">
                  <i class="fab fa-instagram" style="color:violet;"></i>
                </a>
                <a href="#" class="youtube">
                  <i class="fab fa-youtube" style="color:red;"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>