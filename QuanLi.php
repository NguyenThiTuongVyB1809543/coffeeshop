
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
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Admin.php">Admin</a></li> 
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="DangXuat.php">Đăng Xuất</a></li>
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
        $idtv = $_SESSION['id'];
        require 'KetNoiB1.php';
        mysqli_set_charset($con, 'UTF8');
        // $sql = "SELECT * FROM sanpham ";
        $sql = "SELECT * FROM products ";
        $result = $con->query($sql);
        echo "<br>";
        echo"
        <section class='page-section cta'>
            <div class='container'>
                <div class='row'>
                    <div class='col-xl-9 mx-auto'>
                        <div class='cta-inner bg-faded text-center rounded'>
                            <h2 class='section-heading mb-5'>
                                <span class='section-heading-upper'>Come On In</span>
                                <span class='section-heading-lower'>Quản Lí Sản Phẩm</span>
                            </h2>
                            <div class='intro-button mx-auto'><a class='btn btn-primary btn-xl' href='ThemSanPham.php'>Thêm Sản Phẩm</a></div><br>
                            <table border = '1' cellpadding = '1' cellspacing = '1'>
                                <tr>
                                    <th>
                                        <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                <span class='ms-auto'>Tên Đồ Uống</span>
                                            </li>
                                        </ul>
                                    </th>
                                    <th>
                                    <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                <span class='ms-auto'> Mô Tả</span>
                                            </li>
                                        </ul>
                                       
                                    </th>
                                    <th>
                                    <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                <span class='ms-auto'>Giá</span>
                                            </li>
                                        </ul>
                                        
                                    </th>
                                    <th>
                                    <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                <span class='ms-auto'> Hình Ảnh</span>
                                            </li>
                                        </ul>
                                       
                                    </th>
                                    <th></th>
                                    <th></th>
                                </tr>

                                <tr>";
                                // while($row = $result->fetch_assoc()){
                                //     $idsp = $row['idsp'];
                                //     // echo "$idsp";
                                //     echo "
                                //         <td>".$row['tensp']."<br></td>
                                //         <td>".$row['chitietsp']." <br></td>
                                //         <td>".$row['giasp']." <br></td>
                                        
                                //         <td><img src='".$row['hinhanhsp']."' width='40%'><br></td>
                                //         <td><div class='intro-button mx-auto' ><a class='btn btn-primary btn-xl' href='Sua.php?masp=".$idsp."'>Sửa</a></div></td>
                                //         <td><div class='intro-button mx-auto' ><a class='btn btn-primary btn-xl' href='Xoa.php?masp=".$idsp."'>Xóa</a></div></td>
                                        
                                //     </tr>
                                //      ";
                                // }


                                while($row = $result->fetch_assoc()){
                                        $idsp = $row['product_id'];
                                        // echo "$idsp";
                                        echo "
                                            <td>".$row['product_name']."<br></td>
                                            <td>".$row['description']." <br></td>
                                            <td>".$row['price']." <br></td>
                                            
                                            <td><img src='".$row['image_url']."' width='40%'><br></td>
                                            <td><div class='intro-button mx-auto' ><a class='btn btn-primary btn-xl' href='Sua.php?masp=".$idsp."'>Sửa</a></div></td>
                                            <td><div class='intro-button mx-auto' ><a class='btn btn-primary btn-xl' href='Xoa.php?masp=".$idsp."'>Xóa</a></div></td>
                                            
                                        </tr>
                                         ";
                                    }
                            echo "</table>
                            
                            <p class='address mb-5'>
                                <em>
                                    <strong>3/2, XuanKhanh</strong>
                                    <br />
                                    NinhKieu, CanTho
                                </em>
                            </p>
                            <p class='mb-0'>
                                <small><em>Call Anytime</em></small>
                                <br />
                                (317) 585-8468
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>";
        
    }
    echo"
    <footer class='footer text-faded text-center py-5'>
        <div class='container'><p class='m-0 small'>Copyright &copy; Tường Di Website 2022</p></div>
    </footer>
    ";
?>