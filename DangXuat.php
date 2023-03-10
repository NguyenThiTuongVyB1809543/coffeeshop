<?php
    session_start();
    if(isset($_SESSION['id'])){
        session_unset();
        session_destroy();
        // echo "duoc";
        header('location: index.php');
        exit();
    }
    else{
        // echo "khong";
        header('location: CanhBao.php');
    }
?>
<?php
    // if(isset($_COOKIE['user'])){
    //     setcookie("user", "", time() -3600);
    //     header('location: DangNhap.html');
    //     exit();
    // }
    // else{
    //     header('location: DangNhap.html');
    // }
?>
