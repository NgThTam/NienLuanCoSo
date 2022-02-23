<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Kiếm Việc Làm </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./image/fontawesome-free-5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./base.css">
    <link rel="stylesheet" href="main.css">
</head>
<?php 
session_start();
include_once('connect.php');
?>
<body>
    <div class="app">
        <?php include_once('./header.php');?>
        <div class="slider">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="./image/3.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="./image/2.png" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="./image/1.jpg" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="search-job">
                    <h3>Tìm Kiếm Công Việc</h3>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nhập để tìm kiếm" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="input-group-text" id="basic-addon2">Tìm Kiếm</button>
                        </div>
                    </div>                  
                </div>
            </div>
    <div class="main">
			<div class="body">
        <div class="hea">
          <h2>Nhà Tuyển Dụng Nổi Bật</h2>
        </div>
        <div class="my-card">
          <div class="card card1">
            <img class="card-img-top" src="./image/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">V I N F A S T</h5>
              <p class="card-text">Công ty ô tô mang thương hiệu Việt Nam đầu tiên. </p>
              <p>Việt Nam-Phong cách-An toàn-Sáng tạo-Tiên phong không chỉ đơn thuần là những từ viết tắt tạo nên VinFast mà ...</p>
              <a href="#" class="btn btn-primary">Xem thêm</a>
            </div>
          </div>
          <div class="card card1">
            <img class="card-img-top" src="./image/nike.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">N I K E</h5>
              <p class="card-text">Mang lại cảm hứng và sự đổi mới cho mọi vận động viên trên thế giới.</p>
              <p class="card-text">Nike hoạt động tại hơn 160 quốc gia trên toàn cầu với hơn 30.000 nhân viên trên khắp sáu châu lục, là nhà cung ...</p>
              <a href="#" class="btn btn-primary">Xem thêm</a>
            </div>
          </div>
          <div class="card card1">
            <img class="card-img-top" src="./image/suzuki.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">S U Z U K I</h5>
              <p class="card-text">"Way of Life" , thổi luồng gió mới vào ngành công nghiệp xe máy.</p>
              <p class="card-text">Năm 1996, Suzuki chính thức đặt chân vào Việt Nam với mục tiêu trở thành một trong những hãng xe hàng đầu tại ...</p>
              <a href="#" class="btn btn-primary">Xem thêm</a>
            </div>
          </div>
          <div class="card card1">
            <img class="card-img-top" src="./image/puma.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">P U M A</h5>
              <p class="card-text">Top 3 thương hiệu thời trang hàng đầu thế giới.</p>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Xem thêm</a>
            </div>
          </div>
        </div>
        <div class="hea">
          <h2 class="the">Tư Vấn Nghề Nghiệp</h2>
        </div>
        <div class="tuvan">
          <div class="card asd123">
            <img class="card-img-top card-img-top-1" src="./image/sathai.jpg">
            <div class="card-body cardbody1">
              <h5 class="card-title"><a href="#" class="thea">10 công việc sẽ bị đào thải trong thời gian tới!</a></h5>
              <p class="card-text-1">Thời thế thay đổi, công nghệ lên ngôi, các xu hướng việc làm cũng có những chuyển biến rõ rệt. Nếu 10 năm trước ngành IT vẫn còn xa lạ thì nay lại trở thành xu thế, người người nhà ...</p>
            </div>
          </div>
          <div class="card asd123">
            <img class="card-img-top card-img-top-1" src="./image/tuvan3.png">
            <div class="card-body cardbody1">
              <h5 class="card-title"><a href="#" class="thea">2021 : Những kỹ năng tìm kiếm việc làm cần nâng cấp</a></h5>
              <p class="card-text-1">Thời thế thay đổi, tìm kiếm một công việc mới vốn là việc khó khăn, nay có thể càng nan giải hơn. Điều đó có nghĩa là chúng ta cần rà soát và nâng cấp những kỹ năng tìm kiếm việc làm quan trọng. GTVL ở đây để hướng dẫn bạn từng bước trên con đường này: từ tìm kiếm, nộp đơn... </p>
            </div>
          </div>
          <div class="card asd123">
            <img class="card-img-top card-img-top-1" src="./image/tuvan4.jpg">
            <div class="card-body cardbody1">
              <h5 class="card-title"><a href="#" class="thea">Tư duy trong lựa chọn sự nghiệp - bạn đã có chưa?</a></h5>
              <p class="card-text-1">Chọn loại công việc mà bạn sẽ làm là một trong những quyết định quan trọng nhất trong đời. Việc đưa quyết định có thể mất vài tuần, vài tháng hoặc thậm chí nhiều năm trong khi vừa tìm kiếm vừa học hỏi, rà soát, tự vấn bản thân. Có tư duy rõ ràng, bạn sẽ rút ngắn được thời gian.</p>
            </div>
          </div>
          <div class="card asd123">
            <img class="card-img-top card-img-top-1" src="./image/images.jpg">
            <div class="card-body cardbody1">
              <h5 class="card-title"><a href="#" class="thea">Ứng viên lớn tuổi - để sẵn sàng phỏng vấn xin việc</a></h5>
              <p class="card-text-1">Quan điểm của nhà tuyển dụng về vấn đề tuổi tác thường ảnh hưởng đến quyết định tuyển dụng. Và khi bạn là một ứng viên có tuổi giữa vô vàn những ứng viên trẻ trung khác, rất khó để tuổi tác không trở thành một vật cản. Tuy vậy, vẫn có những hành động có thể giúp bạn tăng tỉ lệ thành công trong cuộc phỏng vấn.</p>
            </div>
          </div>
        </div>
        <div class="hea">
          <h2>Việc làm nổi bật</h2>
        </div>
        <!-- Swiper -->
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slide1">
                <div class="slide_item">
                  <img src="./image/huynhgia.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Trưởng phòng kinh doanh</a>
                    <p class="slide_noidung1">công ty cổ phần nông nghiệp Huỳnh Gia</p>
                    <p class="slide_noidung2">$Lương:25tr - 40tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/20_Logo FPT Telecom_Small.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Trưởng phòng đầu tư và phát triển dự án</a>
                    <p class="slide_noidung1">Công ty cổ phần viễn thông FPT</p>
                    <p class="slide_noidung2">$Lương:15tr - 50tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hà Nội</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/heal.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Civil & Structural Drafter</a>
                    <p class="slide_noidung1">Công tyy TNHH VKA Healthcare Vietnam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
              <div class="slide2">
                <div class="slide_item">
                  <img src="./image/goldsun.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Chuyên viên kinh doanh</a>
                    <p class="slide_noidung1">Goldsun Group</p>
                    <p class="slide_noidung2">$Lương:15tr - 30tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh | Hà nội</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/hoasen.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Chuyên viên kinh doanh sản phẩm thương mại</a>
                    <p class="slide_noidung1">tập đoàn hoa sen</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> toàn quốc</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/hyosung.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Biên phiên dịch tiếng Nhật-Hàn/Japanese-Korean Interpreter</a>
                    <p class="slide_noidung1">Hyosung Corp</p>
                    <p class="slide_noidung2">$Lương:800-1,400 USD</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Đồng Nai</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide1">
                <div class="slide_item">
                  <img src="./image/ladies.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Nhân viên hành chính văn phòng</a>
                    <p class="slide_noidung1">Cửa hàng thời trang Ladies Style</p>
                    <p class="slide_noidung2">$Lương:5tr - 7tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/thinhphat.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Nhân kinh doanh dự án (khu Sala)</a>
                    <p class="slide_noidung1">công ty cổ phần cáp điện Thịnh Phát</p>
                    <p class="slide_noidung2">$Lương:8tr - 15tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/healcare.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Civil & Structural Drafter</a>
                    <p class="slide_noidung1">Công ty TNHH VKA Healthcare Vietnam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
              <div class="slide2">
                <div class="slide_item">
                  <img src="./image/olam_cocoa_logo.png" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">General Accountant (Soluble Coffe)</a>
                    <p class="slide_noidung1">Công ty TNHH Olam Việt nam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Đồng Nai</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/TH.png" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">[TPHCM] Giám sát bán hàng kênh GT</a>
                    <p class="slide_noidung1">Công ty cỗ phần chuỗi thực phẩm TH</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/vanan.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Nhân viên chăm sóc khách hàng</a>
                    <p class="slide_noidung1">Công ty TNHH thương mại Vạn An</p>
                    <p class="slide_noidung2">$Lương:9tr - 12tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide1">
                <div class="slide_item">
                  <img src="./image/huynhgia.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Trưởng phòng kinh doanh</a>
                    <p class="slide_noidung1">công ty cổ phần nông nghiệp Huỳnh Gia</p>
                    <p class="slide_noidung2">$Lương:25tr - 40tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/20_Logo FPT Telecom_Small.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Trưởng phòng đầu tư và phát triển dự án</a>
                    <p class="slide_noidung1">Công ty cổ phần viễn thông FPT</p>
                    <p class="slide_noidung2">$Lương:15tr - 50tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hà Nội</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/heal.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Civil & Structural Drafter</a>
                    <p class="slide_noidung1">Công tyy TNHH VKA Healthcare Vietnam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
              <div class="slide2">
                <div class="slide_item">
                  <img src="./image/goldsun.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Chuyên viên kinh doanh</a>
                    <p class="slide_noidung1">Goldsun Group</p>
                    <p class="slide_noidung2">$Lương:15tr - 30tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh | Hà nội</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/hoasen.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Chuyên viên kinh doanh sản phẩm thương mại</a>
                    <p class="slide_noidung1">tập đoàn hoa sen</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> toàn quốc</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/hyosung.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Biên phiên dịch tiếng Nhật-Hàn/Japanese-Korean Interpreter</a>
                    <p class="slide_noidung1">Hyosung Corp</p>
                    <p class="slide_noidung2">$Lương:800-1,400 USD</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Đồng Nai</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide1">
                <div class="slide_item">
                  <img src="./image/huynhgia.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Trưởng phòng kinh doanh</a>
                    <p class="slide_noidung1">công ty cổ phần nông nghiệp Huỳnh Gia</p>
                    <p class="slide_noidung2">$Lương:25tr - 40tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/20_Logo FPT Telecom_Small.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Trưởng phòng đầu tư và phát triển dự án</a>
                    <p class="slide_noidung1">Công ty cổ phần viễn thông FPT</p>
                    <p class="slide_noidung2">$Lương:15tr - 50tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hà Nội</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/heal.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Civil & Structural Drafter</a>
                    <p class="slide_noidung1">Công tyy TNHH VKA Healthcare Vietnam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
              <div class="slide2">
                <div class="slide_item">
                  <img src="./image/goldsun.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Chuyên viên kinh doanh</a>
                    <p class="slide_noidung1">Goldsun Group</p>
                    <p class="slide_noidung2">$Lương:15tr - 30tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh | Hà nội</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/hoasen.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Chuyên viên kinh doanh sản phẩm thương mại</a>
                    <p class="slide_noidung1">tập đoàn hoa sen</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> toàn quốc</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/hyosung.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Biên phiên dịch tiếng Nhật-Hàn/Japanese-Korean Interpreter</a>
                    <p class="slide_noidung1">Hyosung Corp</p>
                    <p class="slide_noidung2">$Lương:800-1,400 USD</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Đồng Nai</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide1">
                <div class="slide_item">
                  <img src="./image/ladies.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Nhân viên hành chính văn phòng</a>
                    <p class="slide_noidung1">Cửa hàng thời trang Ladies Style</p>
                    <p class="slide_noidung2">$Lương:5tr - 7tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/thinhphat.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Nhân kinh doanh dự án (khu Sala)</a>
                    <p class="slide_noidung1">công ty cổ phần cáp điện Thịnh Phát</p>
                    <p class="slide_noidung2">$Lương:8tr - 15tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/healcare.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Civil & Structural Drafter</a>
                    <p class="slide_noidung1">Công ty TNHH VKA Healthcare Vietnam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
              <div class="slide2">
                <div class="slide_item">
                  <img src="./image/olam_cocoa_logo.png" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">General Accountant (Soluble Coffe)</a>
                    <p class="slide_noidung1">Công ty TNHH Olam Việt nam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Đồng Nai</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/TH.png" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">[TPHCM] Giám sát bán hàng kênh GT</a>
                    <p class="slide_noidung1">Công ty cỗ phần chuỗi thực phẩm TH</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/vanan.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Nhân viên chăm sóc khách hàng</a>
                    <p class="slide_noidung1">Công ty TNHH thương mại Vạn An</p>
                    <p class="slide_noidung2">$Lương:9tr - 12tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide1">
                <div class="slide_item">
                  <img src="./image/ladies.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Nhân viên hành chính văn phòng</a>
                    <p class="slide_noidung1">Cửa hàng thời trang Ladies Style</p>
                    <p class="slide_noidung2">$Lương:5tr - 7tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/thinhphat.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Nhân kinh doanh dự án (khu Sala)</a>
                    <p class="slide_noidung1">công ty cổ phần cáp điện Thịnh Phát</p>
                    <p class="slide_noidung2">$Lương:8tr - 15tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/healcare.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Civil & Structural Drafter</a>
                    <p class="slide_noidung1">Công ty TNHH VKA Healthcare Vietnam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
              <div class="slide2">
                <div class="slide_item">
                  <img src="./image/olam_cocoa_logo.png" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">General Accountant (Soluble Coffe)</a>
                    <p class="slide_noidung1">Công ty TNHH Olam Việt nam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Đồng Nai</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/TH.png" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">[TPHCM] Giám sát bán hàng kênh GT</a>
                    <p class="slide_noidung1">Công ty cỗ phần chuỗi thực phẩm TH</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/vanan.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Nhân viên chăm sóc khách hàng</a>
                    <p class="slide_noidung1">Công ty TNHH thương mại Vạn An</p>
                    <p class="slide_noidung2">$Lương:9tr - 12tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide1">
                <div class="slide_item">
                  <img src="./image/ladies.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Nhân viên hành chính văn phòng</a>
                    <p class="slide_noidung1">Cửa hàng thời trang Ladies Style</p>
                    <p class="slide_noidung2">$Lương:5tr - 7tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/thinhphat.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Nhân kinh doanh dự án (khu Sala)</a>
                    <p class="slide_noidung1">công ty cổ phần cáp điện Thịnh Phát</p>
                    <p class="slide_noidung2">$Lương:8tr - 15tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/healcare.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Civil & Structural Drafter</a>
                    <p class="slide_noidung1">Công ty TNHH VKA Healthcare Vietnam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
              <div class="slide2">
                <div class="slide_item">
                  <img src="./image/olam_cocoa_logo.png" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">General Accountant (Soluble Coffe)</a>
                    <p class="slide_noidung1">Công ty TNHH Olam Việt nam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Đồng Nai</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/TH.png" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">[TPHCM] Giám sát bán hàng kênh GT</a>
                    <p class="slide_noidung1">Công ty cỗ phần chuỗi thực phẩm TH</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/vanan.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Nhân viên chăm sóc khách hàng</a>
                    <p class="slide_noidung1">Công ty TNHH thương mại Vạn An</p>
                    <p class="slide_noidung2">$Lương:9tr - 12tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide1">
                <div class="slide_item">
                  <img src="./image/huynhgia.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Trưởng phòng kinh doanh</a>
                    <p class="slide_noidung1">công ty cổ phần nông nghiệp Huỳnh Gia</p>
                    <p class="slide_noidung2">$Lương:25tr - 40tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/20_Logo FPT Telecom_Small.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Trưởng phòng đầu tư và phát triển dự án</a>
                    <p class="slide_noidung1">Công ty cổ phần viễn thông FPT</p>
                    <p class="slide_noidung2">$Lương:15tr - 50tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hà Nội</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/heal.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Civil & Structural Drafter</a>
                    <p class="slide_noidung1">Công tyy TNHH VKA Healthcare Vietnam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
              <div class="slide2">
                <div class="slide_item">
                  <img src="./image/goldsun.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Chuyên viên kinh doanh</a>
                    <p class="slide_noidung1">Goldsun Group</p>
                    <p class="slide_noidung2">$Lương:15tr - 30tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh | Hà nội</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/hoasen.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Chuyên viên kinh doanh sản phẩm thương mại</a>
                    <p class="slide_noidung1">tập đoàn hoa sen</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> toàn quốc</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/hyosung.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Biên phiên dịch tiếng Nhật-Hàn/Japanese-Korean Interpreter</a>
                    <p class="slide_noidung1">Hyosung Corp</p>
                    <p class="slide_noidung2">$Lương:800-1,400 USD</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Đồng Nai</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide1">
                <div class="slide_item">
                  <img src="./image/huynhgia.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Trưởng phòng kinh doanh</a>
                    <p class="slide_noidung1">công ty cổ phần nông nghiệp Huỳnh Gia</p>
                    <p class="slide_noidung2">$Lương:25tr - 40tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/20_Logo FPT Telecom_Small.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Trưởng phòng đầu tư và phát triển dự án</a>
                    <p class="slide_noidung1">Công ty cổ phần viễn thông FPT</p>
                    <p class="slide_noidung2">$Lương:15tr - 50tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hà Nội</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/heal.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Civil & Structural Drafter</a>
                    <p class="slide_noidung1">Công tyy TNHH VKA Healthcare Vietnam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
              <div class="slide2">
                <div class="slide_item">
                  <img src="./image/goldsun.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Chuyên viên kinh doanh</a>
                    <p class="slide_noidung1">Goldsun Group</p>
                    <p class="slide_noidung2">$Lương:15tr - 30tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh | Hà nội</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/hoasen.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Chuyên viên kinh doanh sản phẩm thương mại</a>
                    <p class="slide_noidung1">tập đoàn hoa sen</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> toàn quốc</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/hyosung.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Biên phiên dịch tiếng Nhật-Hàn/Japanese-Korean Interpreter</a>
                    <p class="slide_noidung1">Hyosung Corp</p>
                    <p class="slide_noidung2">$Lương:800-1,400 USD</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Đồng Nai</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide1">
                <div class="slide_item">
                  <img src="./image/huynhgia.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Trưởng phòng kinh doanh</a>
                    <p class="slide_noidung1">công ty cổ phần nông nghiệp Huỳnh Gia</p>
                    <p class="slide_noidung2">$Lương:25tr - 40tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/20_Logo FPT Telecom_Small.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Trưởng phòng đầu tư và phát triển dự án</a>
                    <p class="slide_noidung1">Công ty cổ phần viễn thông FPT</p>
                    <p class="slide_noidung2">$Lương:15tr - 50tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hà Nội</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/heal.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Civil & Structural Drafter</a>
                    <p class="slide_noidung1">Công tyy TNHH VKA Healthcare Vietnam</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
              <div class="slide2">
                <div class="slide_item">
                  <img src="./image/goldsun.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Chuyên viên kinh doanh</a>
                    <p class="slide_noidung1">Goldsun Group</p>
                    <p class="slide_noidung2">$Lương:15tr - 30tr VNĐ</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh | Hà nội</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/hoasen.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Chuyên viên kinh doanh sản phẩm thương mại</a>
                    <p class="slide_noidung1">tập đoàn hoa sen</p>
                    <p class="slide_noidung2">$Lương:cạnh tranh</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> toàn quốc</p>
                  </div>
                </div>
                <div class="slide_item">
                  <img src="./image/hyosung.jpg" alt="" class="slide_img">
                  <div class="slide_noidung">
                    <a href="#" class="slide_link">Biên phiên dịch tiếng Nhật-Hàn/Japanese-Korean Interpreter</a>
                    <p class="slide_noidung1">Hyosung Corp</p>
                    <p class="slide_noidung2">$Lương:800-1,400 USD</p>
                    <p class="slide_noidung3">
                      <i class="fas fa-map-marker-alt"></i> Đồng Nai</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Add Scrollbar -->
          <div class="swiper-scrollbar"></div>
        </div>
        <div class="hea">
          <h2>Đăng Tuyển Dụng</h2>
        </div>
        <section class="dangtuyen" style="background-image:url(./image/asdasd.jpg)">
          <div class="contain_dangtuyen">
            <div class="body_dangtuyen">
              <div class="noidung_dangtuyen">
                <div class="text_dangtuyen">
                  <span>Dành cho nhà tuyển dụng</span>
                  <h3>Bạn có vị trí cần tuyển ?</h3>
                  <p>
                    chúng tôi có những biện pháp tối ưu phù hợp với
                    <br>
                    nhiều loại hình công ty và tiêu chuẩn riêng
                  </p>
                </div>
                <div class="post_dangtuyen">
                  <a href="./dangtuyendung.php" class="btn_dangtuyen">Đăng tin tuyển dụng</a>
                </div>
              </div>
            </div>
          </div>
        </section>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./appmain.js"></script>
</body>
</html>