
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
        $sql = "SELECT o.*, SUM(oi.item_price) AS total_amount
                        FROM oders o
                        JOIN order_items oi ON o.order_id = oi.order_id
                        GROUP BY o.order_id";
        $result = $con->query($sql);
        echo"
        <section class='page-section cta'>
            <div class='container'>
                <div class='row'>
                    <div class='col-xl-9 mx-auto'>
                        <div class='cta-inner bg-faded text-center rounded'>
                            <h2 class='section-heading mb-5'>
                                <span class='section-heading-upper'>Come On In</span>
                                <span class='section-heading-lower'>Thông Tin Hóa Đơn</span>
                            </h2>
                            <center>
                                <table border = '1' cellpadding = '1' cellspacing = '1'>
                                <tr>
                                <th>
                                <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                <span class='ms-auto'>Tên đăng nhập</span>
                                            </li>
                                        </ul>
                                
                                </th>
                                <th>
                                <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                <span class='ms-auto'> Họ Tên </span>
                                            </li>
                                        </ul>
                               
                                </th> 
                                <th>
                                <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                <span class='ms-auto'>Địa chỉ</span>
                                            </li>
                                        </ul>
                                
                                </th>
                                <th>
                                <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                <span class='ms-auto'>Số điện thoại</span>
                                            </li>
                                        </ul>
                                
                                </th>
                                 
                                <th>
                                <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                <span class='ms-auto'>Thời gian</span>
                                            </li>
                                        </ul>
                                
                                </th>
                                <th>
                                <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                <span class='ms-auto'> Tên sản phẩm</span>
                                            </li>
                                        </ul>
                                
                                </th>
                                <th>
                                <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
                                            <li class='list-unstyled-item list-hours-item d-flex'>
                                                <span class='ms-auto'>Tổng tiền</span>
                                            </li>
                                        </ul>
                                
                                </th>
                                <th></th>
                                <th></th>
                                </tr>
                                <tr>";  
                                while($row = $result->fetch_assoc()){
                                    $user_id = $row['user_id'];
                                    $sql2 = "SELECT * FROM users WHERE id = '$user_id' ";
                                    $result2 = $con->query($sql2);
                                    while($row2 = $result2->fetch_assoc()){ 
                                        echo "
                                            <td>".$row2['username']."<br></td>
                                            <td>".$row2['name']."<br></td>
                                            <td>".$row2['address']."<br></td>
                                            <td>".$row2['phone_number']."<br></td>
                                             
                                            <td>".$row['order_date']."<br></td>";

                                            $order_id = $row['order_id'];
                                            $sql3 = "SELECT * FROM order_items WHERE order_id = '$order_id' ";
                                            $result3 = $con->query($sql3);
                                            echo "<td>";
                                            while($row3 = $result3->fetch_assoc()){ 
                                                $product_id = $row3['product_id'];
                                                $sql4 = "SELECT * FROM products WHERE product_id = '$product_id' ";
                                                $result4 = $con->query($sql4);
                                                $row4 = $result4->fetch_assoc();
                                                echo"
                                                ".$row4['product_name']." X ".$row3['quantity'].",
                                            ";
                                            }
                                            echo"
                                                </td>
                                                <td>         
                                                    ".$row['total_price']."<br>
                                                </td>
                                            </tr>
                                            ";
                                    }



                                    


                                }
                                echo "</table>
                            <center>
                            

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
        
    
    echo"
    <footer class='footer text-faded text-center py-5'>
        <div class='container'><p class='m-0 small'>Copyright &copy; Tường Di Website 2022</p></div>
    </footer>
    ";
        
    }
?>