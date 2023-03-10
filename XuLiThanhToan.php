<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thanh toán- D&L Milk Tea</title>
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
                $phuongthuctt = $_GET['thanhtoan'];
                //echo $phuongthuctt;
        
                if($phuongthuctt == 'ck'){
                    echo"
                    <section class='page-section cta'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-xl-9 mx-auto'>
                                    <div class='cta-inner bg-faded text-center rounded'>
                                        <h2 class='section-heading mb-4'>
                                        <span class='section-heading-lower'>Mời bạn nhập thông tin giao hàng</span>
                                        
                                        <form action='XuLiLuuThanhToan.php?' method='GET' enctype='multipart/form-data'>
                                            <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                        
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                Họ Tên: 
                                                <span class='ms-auto'><input type='text'name = 'hoten'></span>
                                                
                                            </li> 
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                Địa chỉ: 
                                                <span class='ms-auto'><input type='text' name='diachi'> </span>
                                                
                                            </li>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                Số điện thoại: 
                                                <span class='ms-auto'><input type='text' name='sodt'></span>
                                                
                                            </li>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                Thời gian đặt hàng: 
                                                <span class='ms-auto'><input type='text' name='thoigian'></span>
                                                
                                            </li>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                Chuyển khoản
                                                <span class='ms-auto'><input type='radio' id='ck' name='thanhtoan' value='ck'></span>
                                            </li>
                                            </ul>
                                            <input class='btn btn-primary' type='submit'  value='Xác nhận'>
                                        </form>
                                        <br>Mời bạn chuyển khoản theo thông tin như sau: 
                                        <br><br>Chủ Tài Khoản: Cửa hàng trà sữa D&L 
                                        <br>Số tài khoản: 1802 205 053 026
                                        <br>Agribank chi nhánh Ô Môn
                                        <br>Nội dung: tên bạn - số điện thoại
                                        <br>Ví dụ: NGUYENVANA-0123456789
                                        
                                        <br><br>Chúng tôi sẽ liên xác nhận đơn hàng qua số điện thoại mà bạn cung cấp
                                        <br>D&L xin cảm ơn!   
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    ";
                    
                }
                else{
                    echo"
                    <section class='page-section cta'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-xl-9 mx-auto'>
                                    <div class='cta-inner bg-faded text-center rounded'>
                                        <h2 class='section-heading mb-4'>
                                        <span class='section-heading-lower'>Mời bạn nhập thông tin giao hàng</span>
                                        
                                        <form action='XuLiLuuThanhToan.php' method='GET' enctype='multipart/form-data'>
                                            <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                        
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                Họ Tên: 
                                                <span class='ms-auto'><input type='text'name = 'hoten'></span>
                                                
                                            </li> 
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                Địa chỉ: 
                                                <span class='ms-auto'><input type='text' name='diachi'> </span>
                                                
                                            </li>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                Số điện thoại: 
                                                <span class='ms-auto'><input type='text' name='sodt'></span>
                                                
                                            </li>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                Thời gian đặt hàng: 
                                                <span class='ms-auto'><input type='text' name='thoigian'></span>
                                                
                                            </li>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                Thanh toán khi nhận hàng
                                                <span class='ms-auto'><input type='radio' id='offline' name='thanhtoan' value='offline'></span>
                                                
                                            </li>
                                            </ul>
                                            <input class='btn btn-primary' type='submit'  value='Xác nhận'>
                                        </form>
                                        
                                        <br><br>Chúng tôi sẽ liên xác nhận đơn hàng qua số điện thoại mà bạn cung cấp
                                        <br>D&L xin cảm ơn!   
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    ";
                    
                }
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
    //     $phuongthuctt = $_GET['thanhtoan'];
    //     //echo $phuongthuctt;
 
    //     if($phuongthuctt == 'ck'){
    //         echo "Mời bạn nhập thông tin giao hàng: ";
    //         echo"<form action='XuLiLuuThanhToan.php?' method='GET' enctype='multipart/form-data'>";
    //         echo "<br><table >";
    //         echo "
    //         <tr>
    //             <td>         
    //                 Họ Tên: 
    //             </td>
    //             <td>         
    //                 Địa chỉ:   
    //             </td>
    //             <td>         
    //                 Số điện thoại:   
    //             </td>
    //             <td>         
    //                 Thời gian đặt hàng:   
    //             </td>
                
    //         </tr> 
    //         <tr>
    //             <td>         
    //                 <input type='text'name = 'hoten'>
    //             </td>
    //             <td>         
    //                 <input type='text' name='diachi'>  
    //             </td>  
    //             <td>         
    //                 <input type='text' name='sodt'>
    //             </td>  
    //             <td>         
    //                 <input type='text' name='thoigian'>
    //             </td> 
    //             <td>         
    //                 <input type='radio' id='ck' name='thanhtoan' value='ck'>
    //                 <label id='ck' name='thanhtoan' value='ck'>Chuyển khoản</label><br>
    //             </td>
    //         </tr>
    //         "; 
    //         echo "</table>";
    //         echo"<input type='submit' value='Xác nhận'>";
    //         echo"</form>";
    //         echo "<br>Mời bạn chuyển khoản theo thông tin như sau: ";
    //         echo "<br><br>Chủ Tài Khoản: Cửa hàng trà sữa D&L ";
    //         echo "<br>Số tài khoản: 1802 205 053 026";
    //         echo "<br>Agribank chi nhánh Ô Môn";
    //         echo "<br>Nội dung: tên bạn - số điện thoại";
    //         echo "<br>Ví dụ: NGUYENVANA-0123456789";
            
    //         echo "<br><br>Chúng tôi sẽ liên xác nhận đơn hàng qua số điện thoại mà bạn cung cấp";
    //         echo "<br>D&L xin cảm ơn!";
            

    //     }
    //     else{
    //         echo"<form action='XuLiLuuThanhToan.php' method='GET' enctype='multipart/form-data'>";
    //         echo "<br><table >";
    //         echo "
    //         <tr>
    //             <td>         
    //                 Họ Tên: 
    //             </td>
    //             <td>         
    //                 Địa chỉ:   
    //             </td>
    //             <td>         
    //                 Số điện thoại:   
    //             </td>
    //             <td>         
    //                 Thời gian đặt hàng:   
    //             </td>
    //         </tr> 
    //         <tr>
    //             <td>         
    //                 <input type='text'name = 'hoten'>
    //             </td>
    //             <td>         
    //                 <input type='text' name='diachi'>  
    //             </td>  
    //             <td>         
    //                 <input type='text' name='sodt'>
    //             </td>  
    //             <td>         
    //                 <input type='text' name='thoigian'>
    //             </td>
    //             <td>         
    //                 <input type='radio' id='offline' name='thanhtoan' value='offline'>
    //                 <label id='offline' name='thanhtoan' value='offline'>Thanh toán khi nhận hàng</label><br>
    //             </td>
    //         </tr>
    //         "; 
    //         echo "</table>";
    //         echo"<input type='submit' value='Xác nhận'>";
    //         echo"</form>";

    //         echo "<br><br>Chúng tôi sẽ liên xác nhận đơn hàng qua số điện thoại mà bạn cung cấp";
    //         echo "<br>D&L xin cảm ơn!";
    //     }
    // }
?>