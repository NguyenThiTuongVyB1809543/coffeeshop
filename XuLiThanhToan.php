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
                 
                $total = $_GET['total'];
                //echo $phuongthuctt;
         
                //luu dơn hang
                $storeOder =  "INSERT INTO oders (user_id, order_date, total_price) 
                                VALUES ('$idtv', NOW(), '$total' )"; 
                $result1  = $con->query($storeOder); 
                $order_id = mysqli_insert_id($con);
                foreach($_SESSION['cart'] as $product_id => $item) {
                                        
                    require 'KetNoiB1.php';
                    mysqli_set_charset($con, 'UTF8');
                    // Prepare the query with a placeholder for the product ID
                    $sql = "SELECT * FROM products WHERE product_id = '$product_id'";
                    $result = $con->query($sql); 
                    // Fetch the product from the result set
                    $product = $result->fetch_assoc();

                    $item_price = $product['price'] * $item; // Calculate the item price
                    // $total_price += $item_price; // Add the item price to the total price
                    
                    // Display the product information and item price
                    // echo '<p>' . $product['product_name'] . ' x ' . $item . ' = $' . $item_price . '</p>'; 
                    $storeOderItem =  "INSERT INTO order_items (order_id, product_id, quantity, item_price) 
                                        VALUES ('$order_id', '$product_id', '$item' , '$item_price')"; 
                    $result3 = $con->query($storeOderItem);

                    
                } 
                    
                echo"
                <section class='page-section cta'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-xl-9 mx-auto'>
                                <div class='cta-inner bg-faded text-center rounded'>
                                    <h2 class='section-heading mb-4'>
                                    <span class='section-heading-lower'>Bạn đã đặt hàng thành công!</span> 
                                    <br>Mời bạn đến mục đơn hàng để xem lại đơn đã đặt.
                                    <br>D&L xin cảm ơn!   
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                ";
                    
                unset($_SESSION["cart"]);
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


 