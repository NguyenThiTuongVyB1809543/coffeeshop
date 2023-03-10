<?php
    //(1) Lấy dữ liệu về
    $username = $_POST['name'];//tên
    $pass1 = $_POST['pass'];//password


    // Hình đại diện
    // $duongdan = "./img/".$_FILES['myfile']['name'];
    // move_uploaded_file($_FILES['myfile']['tmp_name'], $duongdan);
   

    // Giới tính
    // $gioitinh = $_POST['gender'];
    
    // Nghề nghiệp
    // $nghenghiep = $_POST['subject'];

    // Sở thích
    // $st = "";
    // foreach( $_POST['sothich'] as $gtri){
    //     $st = $st.$gtri;
    // }


    //(2) Làm việc với CSDl
    require 'KetNoiB1.php';
    mysqli_set_charset($con, 'UTF8');
   
   //viết câu sql
    $sql = "INSERT INTO thanhvien (tendangnhap, matkhau, vaitro) 
    value ('$username', '$pass1', '0')";
    // $con->query($sql);
    
    //thực hiên truy vấn
    $result = $con->query($sql);
    header('location: DangNhap.html');
    $con->close();



?>