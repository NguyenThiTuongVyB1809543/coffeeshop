<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Menu - D&L Milk Teae</title>
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
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="QuanLi.php">Quản Lí Sản Phẩm</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="QuanLiKhachHang.php">Thông Tin Khách Hàng</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="QuanLiHoaDon.php">Thông Tin Hóa Đơn</a></li>
                    </ul>
                </div>  
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4">
                            <form action= "TimKiem.php" method="GET" enctype="multipart/form-data">
                                <div class="input-group" >
                                    <div id="search-autocomplete" class="form-outline" >
                                        <input class="btn btn-primary" type="search" id="form1" name="search" class="form-control" >
                                        </input>
                                        <label class="form-label" for="form1"></label>
                                    </div>
                                    <div>
                                        <input type="submit" class="btn btn-primary"  value = "Search">
                                    </div>
                                </div> 
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
            require 'KetNoiB1.php';
            mysqli_set_charset($con, 'UTF8');
            $search = $_GET['search'];
            $sql = "SELECT * FROM products WHERE product_name LIKE '%".$search."%' ";
            $result = $con->query($sql);
            while($row = $result->fetch_assoc()){
                $idsp = $row['product_id'];

                echo"
                    <section class='page-section'>
                        <div class='container'>
                            <div class='product-item'>
                                <div class='product-item-title d-flex'>
                                    <div class='bg-faded p-5 d-flex ms-auto rounded'>
                                        <h2 class='section-heading mb-0'>
                                            <span class='section-heading-lower'>".$row['product_name']."</span>
                                            <span class='section-heading-upper'>Giá: ".$row['price']."</span>
                                            <div class='intro-button mx-auto'><a class='btn btn-primary btn-xl' href='DatHang.php?masp=".$idsp."'>Thêm vào giỏ hàng</a></div>

                                        </h2>
                                    </div>
                                </div>
                                <img class='product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0' src='".$row['image_url']."' alt='...' />
                                
                                <br>
                                <div class='product-item-description d-flex me-auto'>
                                    <div class='bg-faded p-5 rounded'><p class='mb-0'>".$row['description']."</p></div>
                                </div>
                            </div>
                        </div>
                    </section>
                ";
 
            }
    ?>
        
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Tường Di Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
