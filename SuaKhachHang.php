
<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin - D&L Milk Tea</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Phong Cách Cà Phê Đậm Vị</span>
                <span class="site-heading-lower">D&L Milk Tea</span>
            </h1>
        </header> 
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Trang Chủ</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Admin.php">Admin</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="QuanLi.php">Quản Lí Sản Phẩm</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="QuanLiKhachHang.php">Thông Tin Khách Hàng</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="QuanLiHoaDon.php">Thông Tin Hóa Đơn</a></li>
                      
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html> 

<?php
    session_start();
    if(!isset($_SESSION['id'])){
      header('location: DangNhap.html');
    }
    else{
    //sửa khách hàng vừa chọn
    $idkh = $_GET['makh'];
    // echo $idsp;
    require 'KetNoiB1.php';
    mysqli_set_charset($con, 'UTF8');
    //viết câu sql
    $sql = "SELECT tendangnhap, matkhau, vaitro FROM thanhvien WHERE id = '$idkh'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    echo"
        <section class='page-section cta'>
            <div class='container'>
                <div class='row'>
                    <div class='col-xl-9 mx-auto'>
                        <div class='cta-inner bg-faded text-center rounded'>
                            <h2 class='section-heading mb-5'>
                                <span class='section-heading-upper'>Come On In</span>
                                <span class='section-heading-lower'>Sửa Chi Tiết Khách Hàng</span>
                            </h2>
                            <center>
                            
                            <table>
                                <td>
                                    <form action= 'XuLiSuaKhachHang.php?makh=".$idkh."' method='POST' enctype='multipart/form-data'>
                                        <table >
                                            <tr>
                                                <td>Tên đăng nhập</td>
                                                <td>
                                                    <input type='text' name='account' id='account' value = ".$row['tendangnhap'].">
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Mật Khẩu</td>
                                                <td><input type='text' name='password' value = ".$row['matkhau']."></td>
                                            </tr>
                                            <tr>
                                                <td>Vai trò</td>
                                                <td><input type='text' name='vaitro' id='vaitro' value = '".$row['vaitro']."'></td>
                                            </tr>
                                            
                                            <tr>
                                                <td rowspan='2'>
                                                    
                                                    <div class='intro-button mx-auto'><input type='submit' class='btn btn-primary btn-xl' value = 'Cập nhật khách hàng'></div>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </td>
                                </table>
                        </center> 
                        </div>
                    </div>
                </div>
            </div>
        </section>";
  }
    
?>


