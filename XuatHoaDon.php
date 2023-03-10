<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('location: DangNhap.html');
    }
    else{
        $idtv = $_SESSION['id'];
        require 'KetNoiB1.php';
        mysqli_set_charset($con, 'UTF8');
        $sql = "SELECT idsp, tensp, chitietsp, giasp FROM sanpham WHERE idtv = '$idtv' ";
        $result = $con->query($sql);
        echo "sắp xuất hóa đơn";
        
    //     echo "<table border='1'>";
    //     echo "<tr>
    //         <th>STT</th><th>Tên sản phẩm</th><th>Giá sản phẩm</th>
    //         </tr>";
    //         if($result->num_rows > 0){
    //           $count = 0;
    //           while($row = $result->fetch_assoc()){
    //             // $hinhanhsp = $row['hinhanhsp'];
    //             $idsp = $row['idsp'];
    //             echo "<tr>
                
    //             <td>".$count."</td>
    //             <td> ".$row['tensp']."</td>
                
                
    //             <td >".$row['giasp']."</td>
                
    //             </tr>";
    //             $count++;
        
    //           }
    //         }
    // echo "</table>";
    }
?>