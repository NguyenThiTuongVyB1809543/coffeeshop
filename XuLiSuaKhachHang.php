<?php

    session_start();
    if(!isset($_SESSION['id'])){
        header('location: DangNhap.html');
    }
    else{
        $idkh = $_GET['makh'];
    echo $idkh."<br>";
    //insert sản phẩm vào database

    //(1) Lấy dữ liệu về
    //lấy tên đăng nhập
    $account = $_POST['account'];
    echo $account."<br>";
    //lấy mật khẩu
    $password = $_POST['password'];
    echo "$password"."<br>";
    //lấy vai trò 
    $vaitro = $_POST['vaitro'];
    echo "$vaitro"."<br>";
    

    //lấy id từ session
    $getid = $_SESSION['id'];
    echo $getid;
    //làm việc với cơ sở dữ liệu
    //B1: kết nối
    require 'KetNoiB1.php';
    //viết câu sql
    $sql = "UPDATE  thanhvien SET tendangnhap='$account', matkhau='$password', vaitro='$vaitro'
            WHERE id = $idkh ";
    

    //thực hiện truy vấn
    $result = $con->query($sql);
    header('location: QuanLiKhachHang.php');
    $con->close();
    }
    

?>