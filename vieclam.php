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
</style>
<?php 
  session_start();
  include_once('./connect.php');
?>
<body>
  <div class="app">
  <?php include_once('./header.php');?>
    <div class="main">
        <div class="body">
            <div class="container" style="margin-top:20px;">
              <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-4">
                <?php
                  $sql = "SELECT * FROM `dangtuyendung` WHERE trangthai='2'";
                  $query = mysqli_query($conn,$sql);
                  while($rows = mysqli_fetch_array($query)){              
                ?>
                  <div class="col cardbot" >                    
                      <div class="p-3 tuyen-dung">
                        <img class="card-img-top anh-tuyen-dung" src="./image/<?php echo $rows['Anhtd']?>" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title tieude"><a href="#" class="tieude"><?php echo $rows['TDtd']?></a></h5>
                          <p class="card-text noidung"><span style="font-weight: 500;">Cần tuyển:</span> <?php echo $rows['NDtd']?></p>
                          <p class="card-text noidung"><span style="font-weight: 500;">Chuyên ngành:</span> <?php if($rows['yeucaucn']==''){echo 'Không';}else{echo $rows['yeucaucn'];} ?></p>                 
                          <p class="card-text mucluong">$Mức Lương: <?php echo number_format($rows['Mucluong'],0,',','.');?> vnđ</p>    
                        </div>      
                      </div>  
                  </div>
                <?php }?>
              </div>
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