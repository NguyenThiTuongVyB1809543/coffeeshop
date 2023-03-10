

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lịch sử mua hàng - D&L Milk Teae</title>
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
                require 'KetNoiB1.php';
                mysqli_set_charset($con, 'UTF8');
                $sql = "SELECT donhang.idtvt, sanpham.idsp, donhang.hoten, donhang.diachi, donhang.sodt, donhang.phuongthuc, donhang.thoigian, sanpham.tensp, sanpham.giasp
                FROM donhang
                JOIN sanpham ON donhang.idspp = sanpham.idsp
                AND donhang.idtvt = '$idtv'";
                $result = $con->query($sql);
                echo "
                    <section class='page-section cta'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-xl-9 mx-auto'>
                                    <div class='cta-inner bg-faded text-center rounded'>
                                    <h2 class='section-heading mb-5'>
                                        <span class='section-heading-upper'>Come On In</span>
                                        <span class='section-heading-lower'>Lịch sử mua nước của bạn</span>
                                    </h2>

                                    <table border = '4' cellpadding = '4' cellspacing = '4'>
                                        <tr>
                                            <td>
                                                <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                                    <li class='list-unstyled-item list-hours-item d-flex'>
                                                        <span class='ms-auto'>Họ Tên</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>         
                                                <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                                    <li class='list-unstyled-item list-hours-item d-flex'>
                                                        <span class='ms-auto'>Địa Chỉ</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>         
                                                <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                                    <li class='list-unstyled-item list-hours-item d-flex'>
                                                        <span class='ms-auto'>Số điện thoại</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                                    <li class='list-unstyled-item list-hours-item d-flex'>
                                                        <span class='ms-auto'>Phương thức thanh toán</span>
                                                    </li>
                                                </ul>         
                                                
                                            </td>
                                            <td> 
                                            <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                                    <li class='list-unstyled-item list-hours-item d-flex'>
                                                        <span class='ms-auto'>Thời gian đặt hàng</span>
                                                    </li>
                                                </ul>          
                                                
                                            </td>
                                            <td> 
                                            <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                                    <li class='list-unstyled-item list-hours-item d-flex'>
                                                        <span class='ms-auto'>Tên Nước</span>
                                                    </li>
                                                </ul>          
                                                
                                            </td>
                                            <td>  
                                            <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                                    <li class='list-unstyled-item list-hours-item d-flex'>
                                                        <span class='ms-auto'>Giá Nước</span>
                                                    </li>
                                                </ul>        
                                               
                                            </td>
                                            
                                        </tr> ";
                                        while($row = $result->fetch_assoc()){
                                            if($row['phuongthuc'] == 1 ){
                                                $phuongthuc = "Thanh toán khi nhận hàng";
                                            }
                                            else{
                                                    $phuongthuc = "Chuyển khoản";
                                            }
                                            
                                            echo "
                                            <tr>
                                                <td> 
                                                        
                                                    ".$row['hoten']."<br>
                                                </td>
                                                <td>         
                                                    ".$row['diachi']."<br>  
                                                </td>
                                                <td>         
                                                    ".$row['sodt']."<br>   
                                                </td>
                                                <td>         
                                                    ".$phuongthuc."<br>
                                                </td>
                                                <td>         
                                                    ".$row['thoigian']."<br>
                                                </td>
                                                <td>         
                                                    ".$row['tensp']."<br>
                                                </td>
                                                <td>         
                                                    ".$row['giasp']."<br>
                                                </td>
                                                
                                            </tr> ";
                                        }
                                        echo"
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                ";
                
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
    //     require 'KetNoiB1.php';
    //     mysqli_set_charset($con, 'UTF8');
    //     $sql = "SELECT donhang.idtvt, sanpham.idsp, donhang.hoten, donhang.diachi, donhang.sodt, donhang.phuongthuc, donhang.thoigian, sanpham.tensp, sanpham.giasp
    //     FROM donhang
    //     JOIN sanpham ON donhang.idspp = sanpham.idsp
    //     AND donhang.idtvt = '$idtv'";
    //     $result = $con->query($sql);
       
        
    //     echo "<table border = '1' cellpadding = '1' cellspacing = '1'>";
    //     echo "
    //         <tr>
    //             <td>         
    //                 Họ Tên
    //             </td>
    //             <td>         
    //                 Địa Chỉ
    //             </td>
    //             <td>         
    //                 Số điện thoại
    //             </td>
    //             <td>         
    //                 Phương thức thanh toán
    //             </td>
    //             <td>         
    //                 Thời gian đặt hàng
    //             </td>
    //             <td>         
    //                 Tên Nước
    //             </td>
    //             <td>         
    //                 Giá Nước
    //             </td>
                
    //         </tr> 
    //     ";
    //     echo "<h3>Đây là lịch sữ mua nước của bạn</h3>";
      
       
    //     while($row = $result->fetch_assoc()){
    //         if($row['phuongthuc'] == 1 ){
    //             $phuongthuc = "Thanh toán khi nhận hàng";
    
    //        }
    //        else{
    //             $phuongthuc = "Chuyển khoản";
    //        }
          
    //         echo "
            
            
    //         <tr>
    //             <td>         
    //                 ".$row['hoten']."<br>
    //             </td>
    //             <td>         
    //                 ".$row['diachi']."<br>  
    //             </td>
    //             <td>         
    //                 ".$row['sodt']."<br>   
    //             </td>
    //             <td>         
    //                 ".$phuongthuc."<br>
    //             </td>
    //             <td>         
    //                 ".$row['thoigian']."<br>
    //             </td>
    //             <td>         
    //                 ".$row['tensp']."<br>
    //             </td>
    //             <td>         
    //                 ".$row['giasp']."<br>
    //             </td>
                
    //         </tr> 
    //         "; 
            
    //     }
    //     echo "</table>";
        
    //     echo "<br>";
        
    //     echo "<button type = 'button' ><a href='Menu.php'>Xem Menu </a></button>";
       
    //     echo "<button><a href = 'index.php'>Trở về trang chủ</a></button>";

        

         

    // }
?>