<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <title>Giao Diên</title>
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
                    <a href="#"class="tìm kiếm">
                    <i class="fa fa-search"></i>
                    </a>
                </div>
                <div class="logo">
                  <img src="../img/logo.png" alt="logo"width="180px"; height="60px">
                </div>
                <div id = "mainmenu" >
                  <ul>
                    <button>Đăng Ký</button>
                    <button>Đăng Nhập</button>
                  </ul>
                </div>
            </div><!--End phần Banner-->
            <div id ="menutop"><!--phần Menutop-->
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Thể Loại</a></li>
                    <li><a href="#">Các hoạt động</a></li>
                    <li><a href="#">Trợ giúp</a></li>
                    <li><a href="#">Nhà xuất bản</a></li>
                    <!-- icons giỏ hàng -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16" >
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>                
                </ul>
            </div><!--End phần Menutop-->
            <div id ="maincontent"><!--phần bao của content-->
            <div class="album py-5 bg-light">
          <div class="container">
      
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/KHVT.jpg" width="248" height="255" > <!--dòng này là để ảnh-->
                 
                  <div class="card-body">
                    <p class="card-text"> Khoa học viễn tưởng<br>Người truyền ký ức</p>
                    <b><i style="color:red;">đ 109.000</i></b>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> 
                        <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                   <img src="../img/OIP.jpg" width="248" height="250" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Tâm Lý học<br> Nghệ thuật giải mã hành vi</p>
                   <b><i style="color:red;">đ 119.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/KHVT2.jpg" width="248" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text"> Khoa học viễn tưởng <br> Cổ máy thời gian</p>
                   <b><i style="color:red;">đ 129.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/TVH3.jpg" width="248" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Tiểu thuyết thiếu niên<br> Độc thầm</p>
                   <b><i style="color:red;">đ 89.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/TH.jpg" width="248" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Tiểu Thuyết Kinh dị<br>Âm mưu tẩy não</p>
                   <b><i style="color:red;">đ 79.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/TVH.jpg" width="248" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Thiên văn học<br> Vũ trụ</p>
                   <b><i style="color:red;">đ 200.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/OIP2.jpg" width="248" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text"> Tâm lý học<br> Tâm lý học trẻ em lứa tuổi mầm non</p>
                   <b><i style="color:red;">đ 79.600</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                   <img src="../img/kh.jpg" width="248" height="250" > <!--dòng này là để ảnh-->
                    <div class="card-body">
                   <p class="card-text">Sách khoa học<br> Sinh lý học y khoa</p>
                   <b><i style="color:red;">đ 179.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                   <img src="../img/TT.jpg" width="248" height="250" > <!--dòng này là để ảnh-->
                 <div class="card-body">
                   <p class="card-text">Tiểu thuyết thiếu niên<br> Thiên quan tứ phúc tập 3</p>
                   <b><i style="color:red;">đ 119.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                   <img src="../img/kb.jpg" width="248" height="250" text-align: center > <!--dòng này là để ảnh-->                 
                 <div class="card-body">
                   <p class="card-text">Du lịch<br> Nước đức từ A->Z</p>
                   <b><i style="color:red;">đ 99.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/TVH4.jpg" width="248" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Tiểu thuyết thiếu niên<br> Hoàn khố</p>
                   <b><i style="color:red;">đ 109.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                <img src="../img/OIP1.jpg" width="248" height="255" > <!--dòng này là để ảnh-->
                 
                 <div class="card-body">
                   <p class="card-text">Tiểu thuyết văn học<br> Nhà giả kim</p>
                   <b><i style="color:red;">đ 120.000</i></b>
                   <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">giỏ hàng</button> 
                       <button type="button" class="btn btn-sm btn-outline-secondary">đặt hàng</button>
                      </div>
                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </main>
      
      
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
               
           
            <div id = "footer"><!--phần cuối trang-->
                CopyRight: Trang bán Sách<br>
                Biên tập thiết kế, xây dựng và quản trị: Nguyễn Văn An<br>
                Chịu trách nhiệm chính: Đỗ Thị Đài Trang, Nguyễn Minh Hoàng, Phạm Văn Tiến
            </div><!--End phần cuối trang-->
        </div><!--End bao toàn bộ khung websites-->
    </body>
</html>       