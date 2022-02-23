<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nhà tuyển dụng</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="./image/fontawesome-free-5.15.3/css/all.min.css">
  <link rel="stylesheet" href="./base.css">
</head>
<?php 
  session_start();
  include_once('connect.php');

  //xoa

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
?>
<style>
  .body{
    background-image: url("./image/nhatd.jpeg");
    background-size:cover;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    padding-top: 3rem;
    padding-bottom: 3rem;
  }
  .tabcontent{
    text-align: center;
    width: 70%;
    background-color: whitesmoke;
    border: 1px solid gray;
  }
  .tabcontent h3{
    color:white;
    background-color: rgb(50 49 47 / 75%);s;
    padding-bottom: 10px;
    margin-bottom: 0;
    padding-top: 10px;
  }
  .khung{
    margin: 1rem 1rem;
  }
  .khung td{
    font-size:15px;
  }
  .table th, .table td {
    vertical-align: baseline;
  }
  .table{
    box-shadow: 0px 1px 10px grey;
  }
  .table th {
    font-weight: 900;
    text-align: center;
  }
  .vnd{
    background-color: #3ae33a;
    font-weight: 600;
    color: white;
    font-size: 13px;
    margin-top: -17px;
    position: absolute;
    width: 33px;
    margin-left: 3px;
    height: 20px;
  }
</style>
<body>
  <div class="app">
    <?php include_once('header.php'); ?>
    <div class="main">
        <div class="body">
        <div class="tabcontent">
            <h3>BÀI TUYỂN DỤNG</h3>
            <div class="khung">
                <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ẢNH MINH HỌA</th>
                            <th scope="col">TIÊU ĐỀ</th>
                            <th scope="col">NỘI DUNG</th>
                            <th scope="col">MỨC LƯƠNG </th>
                            <th scope="col">TRẠNG THÁI</th>
                            <th scope="col">XÓA</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                                $id = $_SESSION['idUser2'];
                                $sql_dangtuyen = "SELECT * FROM `dangtuyendung` WHERE IDntd='$id'";
                                $query = mysqli_query($conn,$sql_dangtuyen);
                                $i = 1;
                                while( $tuyendung = mysqli_fetch_array($query)){
                                    
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $i++ ?></th>
                                    <td style="width: 80px;height:80px;padding-right: 30px;">
                                        <img src="./image/<?php echo $tuyendung['Anhtd'] ?>" alt="" style="width: 80px;height:80px;object-fit: cover;border:1px solid;">
                                    </td>
                                    <td><?php echo $tuyendung['TDtd'] ?></td>
                                    <td><?php echo $tuyendung['NDtd'] ?></td>
                                    <td><?php echo number_format($tuyendung['Mucluong'],0,',','.');echo "<span class='vnd'> vnđ</span>"?></td>
                                    <td><?php if($tuyendung['trangthai'] == 2) {
                                        echo "<span class='badge badge-pill badge-success'>đã được duyệt</span>";
                                    }else{
                                        echo "<span class='badge badge-pill badge-secondary'>chưa được duyệt</span>";
                                    };
                                    ?></td>
                                    <td><a href="/NienLuan/baituyendung.php ?IDtd=<?php echo $tuyendung['IDtd']?>&action=delete"><i class="fas fa-trash-alt" style="font-size: 28px;color:red;"></i> </a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
            </div>
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
                <a href="#">VietNamSalary</a>
              </li>
              <li>
                <a href="#">CareerMap</a>
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
                <a>
                  <img src="./image/apple.png" alt="app" class="lazy">
                </a>
                <a>
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