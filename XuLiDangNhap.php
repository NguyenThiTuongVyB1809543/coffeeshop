
<?php   
        session_start();
        //Lay du lieu ve
        $ten = $_POST['name'];
        // echo "$ten"."<br>";	
        $mk = $_POST['pass'];
        // echo "$mk"."<br>";
        //(2)lam viec voi csdl
        require 'KetNoiB1.php';
        mysqli_set_charset($con, 'utf8');
        $getid = "SELECT id FROM thanhvien WHERE tendangnhap = '$ten' AND matkhau = '$mk' ";
        
        $result = $con->query($getid);
        // $row = $result->fetch_assoc();
        $id = $result->fetch_assoc()['id'];

        // echo $id."<br>";
        
        if($result->num_rows>0){
            //dang nhap thanh cong
            // echo"duoc";	
            $_SESSION['id'] = $id;
            if($id == 1){
                // là admin
                header('location:Admin.php');
            }
            else{
                // là khách
                // chuyển tới trang index cho khách chọn lại đồ ăn
                // echo"Khách";	
                header('location:ChonDoUong.php');
            }
            
        }
        else{ 
            // echo"ko duoc";	
            header('location:DangNhap.html');
        }
        $con->close();

?>

