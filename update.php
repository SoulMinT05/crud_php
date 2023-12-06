<?php
//nhan du lieu tu form
    $ht = $_POST['hoten'];
    $masv = $_POST['masv'];
    $lop = $_POST['lop'];
    $id = $_POST['sid']; //lay ra id can cap nhat
//ket noi csdl
require_once 'ketnoi.php';
//viet lenh sql de them du lieu
$updatesql = "UPDATE sinhvien SET masv = '$masv',hoten = '$ht', lop = '$lop' WHERE id = $id";
// echo $updatesql; exit;

//thuc thi cau lenh them
if(mysqli_query($conn, $updatesql)) { 
    //in thong bao thanh cong
    // echo "<h1>Them thanh cong</h1>";

     //tra ve gia tri sau khi them, tro ve trang them
     header("Location: lietke.php");
}
?>
