<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location: DangNhap.html');
}
else{
    //nút xóa là delete sản phẩm khỏi database và cập nhật lại database đồng thời hiển thị lại bảng danh sách sản phẩm
    $idhd = $_GET['mahd']; 
   
    require 'KetNoiB1.php';
    mysqli_set_charset($con, 'UTF8');
    //viết câu sql
    $sql = "DELETE FROM donhang WHERE iddh = '$idhd'";
    $result = $con->query($sql);
    header('location: QuanLiHoaDon.php');
    //đóng kết nối
    $con->close();
}
    
?>