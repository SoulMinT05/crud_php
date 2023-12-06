<?php
//nhan du lieu tu form
    $ht = $_POST['hoten'];
    $masv = $_POST['masv'];
    $lop = $_POST['lop'];

//ket noi csdl
require_once 'ketnoi.php';
//viet lenh sql de them du lieu
$themsql = "INSERT INTO sinhvien (masv, hoten, lop) VALUES ('$masv', '$ht', '$lop')";
// echo $themsql; exit; //kiem tra coi cau lenh co dung khong?

//thuc thi cau lenh them
if(mysqli_query($conn, $themsql)) { 
    //in thong bao thanh cong
    // echo "<h1>Them thanh cong</h1>";

     //tra ve gia tri sau khi them, tro ve trang them
     header("Location: lietke.php");
}
?>
