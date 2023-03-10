<?php

    session_start();
    if(!isset($_SESSION['id'])){
        header('location: DangNhap.html');
    } 
    else{
        $idhd = $_GET['mahd'];
  

    //(1) Lấy dữ liệu về
    //lấy tên
    $hoten = $_POST['hoten'];
    
    $diachi = $_POST['diachi'];
   
    $sodt = $_POST['sodt'];
    $phuongthuc = $_POST['phuongthuc'];
    echo $phuongthuc;

    if($phuongthuc == "thanhtoannhanhang"){
        $doiphuongthuc = 1;
    }
   else if($phuongthuc == "ck"){
        $doiphuongthuc = 0;
    }

    //làm việc với cơ sở dữ liệu
    //B1: kết nối
    require 'KetNoiB1.php';
    //viết câu sql
    $sql = "UPDATE  donhang SET hoten='$hoten', diachi='$diachi', sodt='$sodt', phuongthuc = '$doiphuongthuc'
            WHERE iddh = $idhd "; 
    

    //thực hiện truy vấn
    $result = $con->query($sql);
    header('location: QuanLiHoaDon.php');
    $con->close();
    }
    

?>