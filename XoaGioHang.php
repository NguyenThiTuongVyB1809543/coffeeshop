<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location: DangNhap.html');
}
else{
    //nút xóa là delete sản phẩm khỏi database và cập nhật lại database đồng thời hiển thị lại bảng danh sách sản phẩm
    $idgh = $_GET['mahang'];
    // echo $idsp;
    require 'KetNoiB1.php';
    mysqli_set_charset($con, 'UTF8');
    //viết câu sql
    $sql = "DELETE FROM giohang WHERE idgh = '$idgh'";
    $result = $con->query($sql);
    header('location: GioHang.php');
    //đóng kết nối
    $con->close();
}
    
?>