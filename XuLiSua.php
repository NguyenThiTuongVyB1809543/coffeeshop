<?php

    session_start();
    if(!isset($_SESSION['id'])){
        header('location: DangNhap.html');
    } 
    else{
        $idsp = $_GET['masp'];
    //echo $idsp."<br>";
    //insert sản phẩm vào database

    //(1) Lấy dữ liệu về
    //lấy tên
    $name = $_POST['name_Product'];
    //echo "$name"."<br>";
    //lấy chi tiết
    $detail = $_POST['detail_Product'];
    //echo "$detail"."<br>";
    //lấy giá 
    $price = $_POST['price_Product'];
   // echo "$price"."<br>";
    //lấy hình ảnh
    $duongdan = "./img/".$_FILES['img_Product']['name'];
    move_uploaded_file($_FILES['img_Product']['tmp_name'],$duongdan);
    // echo "$duongdan"."<br>";

    //lấy id từ session
    $getid = $_SESSION['id'];
    //echo $getid;
    //làm việc với cơ sở dữ liệu
    //B1: kết nối
    require 'KetNoiB1.php';
    //viết câu sql
    $sql = "UPDATE  sanpham SET tensp='$name', chitietsp='$detail', giasp='$price', hinhanhsp='$duongdan', idtv='$getid'
            WHERE idsp = $idsp ";
    

    //thực hiện truy vấn
    $result = $con->query($sql);
    header('location: QuanLi.php');
    $con->close();
    }
    

?>