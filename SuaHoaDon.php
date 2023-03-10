<?php
    session_start();
    if(!isset($_SESSION['id'])){
      header('location: DangNhap.html');
  }
  else{
    //sửa hóa đơn vừa chọn
    $idhd = $_GET['mahd'];
    // echo $idsp;
    require 'KetNoiB1.php';
    mysqli_set_charset($con, 'UTF8');
    //viết câu sql
    $sql = "SELECT hoten, diachi, sodt, phuongthuc FROM donhang WHERE iddh = '$idhd'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    if($row['phuongthuc'] == 1){
        $phuongthuc = "Thanh toán khi nhận hàng";

   }
   else{
        $phuongthuc = "Chuyển khoản";
   }
    
    echo "<center>
    <h1>Sửa sản phẩm</h1>  
    <table>
        <td>
            <form action='XuLiSuaHoaDon.php?mahd=".$idhd." ' method='POST' enctype='multipart/form-data'>
                <table >
                    <tr>
                        <td>Họ tên khách hàng</td>
                        <td>
                            <input type='text' name='hoten' id='hoten' value = '".$row['hoten']."'>
                        </td>
                       
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type='text' name='diachi' id='diachi' value = '".$row['diachi']."'></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td><input type='text' name='sodt'id='sodt' value = '".$row['sodt']."'></td>
                    </tr>
                    <tr>
                        <td>Phương thức thanh toán</td>
                        <td>
                            <select name='phuongthuc'>
                                <option value='thanhtoannhanhang'>Thanh toán khi nhận hàng</option>
                                <option value='ck'>Chuyển khoản</option>
                              
                            </select>
                            
                        </td>
                    </tr>
                    <tr>
                        <td rowspan='2'>
                            <center><td><input type='submit' value='Cập nhật sản phẩm'></td></center>
                        </td>
                    </tr>
                </table>
            </form>
        </td>

    </table>
</center>";

  }
    
?>


