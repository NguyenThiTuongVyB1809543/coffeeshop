<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('location: DangNhap.html');
    }
    else{
        $idtv = $_SESSION['id'];
        require 'KetNoiB1.php';
        mysqli_set_charset($con, 'UTF8');
        $hoten = $_GET['hoten'];
        $diachi = $_GET['diachi'];
        $sodt = $_GET['sodt'];
        $thoigian = $_GET['thoigian'];
        $phuongthuctt = $_GET['thanhtoan'];
        echo  $sodt;

        $sql1 = "SELECT idsp, tensp, giasp FROM giohang WHERE idtv = '$idtv'";
        $result1 = $con->query($sql1);
        
        
        if($phuongthuctt == 'ck'){
            while($row1 = $result1->fetch_assoc()){
                $idsp = $row1['idsp'];
                $sql = "INSERT INTO donhang (idtvt, idspp, hoten, diachi, sodt, phuongthuc, thoigian)
                value('$idtv', '$idsp','$hoten', '$diachi', '$sodt', '0', '$thoigian')";
                //thực hiện truy vấn
                $result = $con->query($sql);
            }
            
            $sqlxoa = "DELETE FROM giohang WHERE idtv = '$idtv'";
            $resultxoa = $con->query($sqlxoa);
            //$con->close();
            header('location: index.php');
        } 
        else{
            while($row1 = $result1->fetch_assoc()){
                $idsp = $row1['idsp'];
                $sql = "INSERT INTO donhang (idtvt, idspp, hoten, diachi, sodt, phuongthuc, thoigian)
                value('$idtv', '$idsp','$hoten', '$diachi', '$sodt', '1', '$thoigian')";
                //thực hiện truy vấn
                $result = $con->query($sql);
            }
            $sqlxoa = "DELETE FROM giohang WHERE idtv = '$idtv'";
            $resultxoa = $con->query($sqlxoa);
            $con->close();
            header('location: index.php'); 
        } 

    }
?>