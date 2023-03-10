<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location: DangNhap.html');
}
else{
    $idkh = $_GET['makh'];
    // echo $idsp;
    require 'KetNoiB1.php';
    mysqli_set_charset($con, 'UTF8');
    //viết câu sql
    $sql = "DELETE FROM thanhvien WHERE id = '$idkh'";
    $result = $con->query($sql);
    header('location: QuanLiKhachHang.php');
    //đóng kết nối
    $con->close();
}
    
?>