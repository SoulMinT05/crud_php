<?php
    //lay du lieu id can xoa
    $svid = $_GET['sid'];
    // echo $id;

    //ket noi csdl
    require_once 'ketnoi.php';
    //cau lenh sql
    $xoa_sql = "DELETE FROM sinhvien where id=$svid";

    mysqli_query($conn, $xoa_sql);
    // echo "<h1>Xoa thanh cong</h1>";

    //tra ve gia tri sau khi xoa, tro ve trang liet ke
    header("Location: lietke.php");
?>