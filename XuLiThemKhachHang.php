<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('location: DangNhap.html');
    }
    else{
        //insert khách hàng vào database

    //(1) Lấy dữ liệu về
    //lấy account
    $account = $_POST['account'];
    $name = $_POST['name']; 
    //lấy password
    $password = $_POST['password']; 


    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];


    //lấy vaitro 
    $vaitro = $_POST['vaitro'];
    echo "$vaitro"."<br>";

    //lấy id từ session
    $getid = $_SESSION['id'];
    echo $getid;
   

    

    //(2) Làm việc với csdl
    //B1: kết nối
    require 'KetNoiB1.php';
    //viết câu sql
    // $sql = "INSERT INTO thanhvien (tendangnhap, matkhau, vaitro)
    //         value('$account', '$password', '$vaitro')";
    $sql = "INSERT INTO users (username, password, name, email, address, phone_number, vaitro)
            value('$account', '$password','$name', '$email', '$address', '$phone_number', '$vaitro')";

    //thực hiện truy vấn
    $result = $con->query($sql);
    header('location: QuanLiKhachHang.php');
    $con->close();

    //////////
   
    }
    

?>