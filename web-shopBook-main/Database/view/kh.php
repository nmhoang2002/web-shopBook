<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <title>Giao Diên</title>
        <link rel="stylesheet" href="../js/scrip.js">
        <link rel="stylesheet" href="../css/Styles.css"> <!-- link tới file CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </head>
    <body>
    <div id = "main"><!--bao toàn bộ khung website-->
            <div id ="head"><!--phần Banner-->
                <h1>MUA SÁCH NHANH VÀ RẺ NHẤT</h1>
                <h2>TẠI SHOP ONLINE</h2>
               
                <h3>HTT</h3>
                <h4>(Những bộ sách sắp phát hành với giá ưu đãi cực sốc)</h4>
                <div class="search-text">
                    <input type="search" name="search" placeholder="Tìm kiếm">
                    <a href="#"class="search-btn">
                    <i class="fa fa-search"></i>
                    </a>
                </div>
                <div class="logo">
                  <img src="../img/logo.png" alt="logo"width="180px"; height="60px">
                </div>  
            </div>          
            <div id ="menutop"><!--phần Menutop-->
                <ul>
                    <li><a href="../php/index.php">Trang chủ</a></li>
                    <li><a href="../page/gioithieu.php">Giới thiệu</a></li>
                    <li><a href="#">Thể Loại</a>
                      <ul >
                        <li><a href="#">Khoa học </a></li>
                        <li><a href="../view/tltc.php">Tâm lý-Tình cảm</a></li>
                        <li><a href="../view/tthuyet.php">Tiểu thuyết </a></li>
                        <li><a href="../view/vh.php">Văn học Việt Nam</a></li>
                        <li><a href="../view/comic.php">Truyện tranh</a></li>
                        </ul>
                  </li>
                    <li><a href="../page/cachoatdong.php">Các hoạt động</a></li>
                    <li><a href="../page/trogiup.php">Trợ giúp</a></li>
                    <li><a href="../page/nhaxuatban.php">Nhà xuất bản</a></li> 
                    <!--  icons giỏ hàng -->
                    <a href="../page/giohang.php"> <svg  xmlns="http://www.w3.org/2000/svg" color="white" width="25" height="25" float="right" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16" >
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>  </a>                     
                </ul>
            </div><!--End phần Menutop-->
            <div class="container"> <!--Bìa quảng cáo-->
              <img src="../img/khoahoc.jpg" width="100%" height="350px" >
            </div>
            <div id ="maincontent"><!--phần bao của content-->
            <div class="album py-5 bg-light">
          <div class="container">
      
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/KHVT.jpg" width="350" height="255" > <!--dòng này là để ảnh-->
                 
                  <div class="card-body">
                    <p class="card-text"> Khoa học viễn tưởng<br>Người truyền ký ức</p>
                    <b><i style="color:red;">đ 109.000</i></b>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a href="../page/giohang.php"> <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> </a>
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                       <a href="../view/vt.php"><button type="button" class="btn btn-sm btn-outline-secondary">thông tin</button></a>
                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                   <img src="../img/TVH2.jpg" width="350" height="250" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Khoa học<br>Vũ trụ trong vỏ hạt dẻ</p>
                   <b><i style="color:red;">đ 119.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                     <a href="../page/giohang.php"> <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> </a> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                       <a href="../view/tlh.php"><button type="button" class="btn btn-sm btn-outline-secondary">thông tin</button></a>

                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/KHVT2.jpg" width="350" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text"> Khoa học viễn tưởng <br> Cổ máy thời gian</p>
                   <b><i style="color:red;">đ 129.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                     <a href="../page/giohang.php"> <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> </a> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                       <a href="../view/vt.php"><button type="button" class="btn btn-sm btn-outline-secondary">thông tin</button></a>

                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/TVH5.jpg" width="350" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Khoa học<br> Thiên văn vui</p>
                   <b><i style="color:red;">đ 89.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                     <a href="../page/giohang.php"> <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> </a> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                       <a href="../view/vt.php"><button type="button" class="btn btn-sm btn-outline-secondary">thông tin</button></a>

                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/tvhvt.jpg" width="350" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Khoa học<br>Từ điển thiên văn học & vật lý thiên văn</p>
                   <b><i style="color:red;">đ 79.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                     <a href="../page/giohang.php"> <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> </a> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                       <a href="../view/vt.php"><button type="button" class="btn btn-sm btn-outline-secondary">thông tin</button></a>

                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/TVH.jpg" width="350" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Thiên văn học<br> Vũ trụ</p>
                   <b><i style="color:red;">đ 200.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                     <a href="../page/giohang.php"> <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> </a>
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                       <a href="../view/vt.php"><button type="button" class="btn btn-sm btn-outline-secondary">thông tin</button></a>

                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/TVH6.png" width="350" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Thiên văn học<br>Trái đất và vũ trụ </p>
                   <b><i style="color:red;">đ 199.600</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                     <a href="../page/giohang.php"> <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> </a> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                       <a href="../view/vt.php"><button type="button" class="btn btn-sm btn-outline-secondary">thông tin</button></a>

                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                   <img src="../img/kh.jpg" width="350" height="250" > <!--dòng này là để ảnh-->
                    <div class="card-body">
                   <p class="card-text">Sách khoa học<br> Sinh lý học y khoa</p>
                   <b><i style="color:red;">đ 179.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                     <a href="../page/giohang.php"> <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> </a>
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                       <a href="../view/vt.php"><button type="button" class="btn btn-sm btn-outline-secondary">thông tin</button></a>

                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                   <img src="../img/TVH7.png" width="350" height="250" > <!--dòng này là để ảnh-->
                 <div class="card-body">
                   <p class="card-text">Khoa học<br>Ánh sáng ,âm thanh và điện</p>
                   <b><i style="color:red;">đ 119.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                     <a href="../page/giohang.php"> <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> </a> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                       <a href="../view/vt.php"><button type="button" class="btn btn-sm btn-outline-secondary">thông tin</button></a>

                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                   <img src="../img/TVH8.png" width="350" height="250" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Khoa học<br>Hỗn hợp và hợp chất</p>
                   <b><i style="color:red;">đ 99.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                     <a href="../page/giohang.php"> <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> </a> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                       <a href="../view/vt.php"><button type="button" class="btn btn-sm btn-outline-secondary">thông tin</button></a>

                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/TVH9.jpg" width="350" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Khoa học<br>Sinh học</p>
                   <b><i style="color:red;">đ 189.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                     <a href="../page/giohang.php"> <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> </a> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                       <a href="../view/vt.php"><button type="button" class="btn btn-sm btn-outline-secondary">thông tin</button></a>

                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/TVH10.jpg" width="350" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Khoa học<br>Khủng long</p>
                   <b><i style="color:red;">đ 120.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                     <a href="../page/giohang.php"> <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> </a> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                       <a href="../view/vt.php"><button type="button" class="btn btn-sm btn-outline-secondary">thông tin</button></a>

                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
            </div> <!--end phần content-->
          </div>
        </div>
        
      </main>
      
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>        
        <footer class="page-footer font-small special-color-dark pt-4">
            <div id = "footer"><!--phần cuối trang-->
                CopyRight: Trang bán Sách<br>
                Biên tập thiết kế, xây dựng và quản trị: Phạm Văn Tiến<br>
                Chịu trách nhiệm chính: Đỗ Thị Đài Trang, Nguyễn Minh Hoàng
            
              <div class="container">
            <!-- icon mạng XH -->
              <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                  <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-instagram"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-github"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-youtube"> </i>
                  </a>
                </li>
              </ul>
              <!-- end icon mạng XH -->
          </div>
        </footer><!-- end Footer -->
      </div><!--End bao toàn bộ khung websites-->
    </body>
</html>       