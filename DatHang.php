<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thêm Vào Giỏ Hàng Thành Công - D&L Milk Tea</title>
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
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Menu.php">Xem Menu</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="FormDK.html">Đăng Kí</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="DangNhap.html">Đăng Nhập</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="DangXuat.php">Đăng Xuất</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="GioHang.php">Giỏ Hàng</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="DonHang.php">Đơn Hàng</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.html">Store</a></li>
                    </ul>
                </div>  
            </div>
        </nav>
        
        <?php
            session_start();
            if(!isset($_SESSION['id'])){
                header('location: DangNhap.html');
            }
            else{
                $idtv = $_SESSION['id'];
                $idsp = $_GET['masp'];
                require 'KetNoiB1.php';
                mysqli_set_charset($con, 'UTF8');

                $sql = "SELECT idsp, tensp, giasp FROM sanpham WHERE idsp = '$idsp'";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();

                $sqltv = "SELECT tendangnhap FROM thanhvien WHERE id = '$idtv'";
                $resulttv = $con->query($sqltv);
                $rowtv = $resulttv->fetch_assoc();
                // echo $idsp."<br>";
                // echo $row['tensp'];
                
                // header('location: XuatHoaDon.php');
                echo"
                <section class='page-section cta'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-xl-9 mx-auto'>
                                <div class='cta-inner bg-faded text-center rounded'>
                                    <h2 class='section-heading mb-4'>
                                        <span class='section-heading-upper'>Bạn đã thêm món vào giỏ hàng thành công! </span>
                                        <span class='section-heading-lower'>".$row['tensp']."</span>
                                        <span class='section-heading-upper'>Mời bạn vào giỏ hàng để thang toán</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                ";
                $tensp = $row['tensp'];
                $giasp = $row['giasp'];
                
                //Thêm idtv, tensp, giasp vào bảng giohang có 3 cột 
                $sqlthemgh = "INSERT INTO giohang (idtv, idsp, tensp, giasp) VALUES ('$idtv', '$idsp', '$tensp', '$giasp' )";
                $resultgh = $con->query($sqlthemgh);
                $con->close();
              
            }
        ?>          
        
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Tường Di Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>









<?php
    // session_start();
    // if(!isset($_SESSION['id'])){
    //     header('location: DangNhap.html');
    // }
    // else{
    //     $idtv = $_SESSION['id'];
    //     $idsp = $_GET['masp'];
    //     require 'KetNoiB1.php';
    //     mysqli_set_charset($con, 'UTF8');

    //     $sql = "SELECT idsp, tensp, giasp FROM sanpham WHERE idsp = '$idsp'";
    //     $result = $con->query($sql);
    //     $row = $result->fetch_assoc();

    //     $sqltv = "SELECT tendangnhap FROM thanhvien WHERE id = '$idtv'";
    //     $resulttv = $con->query($sqltv);
    //     $rowtv = $resulttv->fetch_assoc();
    //     // echo $idsp."<br>";
    //     // echo $row['tensp'];
        
    //     // header('location: XuatHoaDon.php');

        
    //     echo "<center>";
    //     echo "<h2>Bạn đã thêm món vào giỏ hàng thành công! </h2>";
    //     echo "Tên đồ uống: ".$row['tensp']."<br><br>";
    //     $tensp = $row['tensp'];
    //     $giasp = $row['giasp'];
        
    //     //Thêm idtv, tensp, giasp vào bảng giohang có 3 cột 
    //     $sqlthemgh = "INSERT INTO giohang (idtv, idsp, tensp, giasp) VALUES ('$idtv', '$idsp', '$tensp', '$giasp' )";
    //     $resultgh = $con->query($sqlthemgh);
    //     $con->close();
    //     //đường dẫn đến giỏ hàng
    //     echo "<button type = 'button'><a href='GioHang.php'>Xem Giỏ Hàng</a></button>";
    //     echo "<button><a href = 'index.php'>Trở về trang chủ</a></button>";
    //     echo "</center>";
    // }
?>