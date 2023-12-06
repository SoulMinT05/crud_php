<?php
    //lay id can sua cua edit
    $id = $_GET['sid'];
    //ket noi 
    require_once 'ketnoi.php';
    //cau lenh de lay thong tin ve sinh vien co id = $id (du lieu cu)
    $edit_sql = "SELECT * FROM sinhvien WHERE id=$id";

    $result = mysqli_query($conn, $edit_sql);
    $row = mysqli_fetch_assoc($result);
?>

    <!-- hien thi thong tin len form -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Edit sinh viên</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
        />
        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <div class="container">
            <h1>Form cập nhật thông tin sinh viên</h1>
            <form action="update.php" method="post">
                <input type="hidden" name="sid" id="" value="<?php echo $id;?>">
                <div class="form-group">
                    <label for="hoten">Ho tên</label>
                    <input type="text" id="hoten" name="hoten" class="form-control" value="<?php echo $row['hoten']?>" />
                </div>
                <div class="form-group">
                    <label for="masv">Mã sinh viên</label>
                    <input type="text" id="masv" name="masv" class="form-control" value="<?php echo $row['masv']?>"/>
                </div>
                <div class="form-group">
                    <label for="lop">Lớp</label>
                    <input type="text" id="lop" name="lop" class="form-control" value="<?php echo $row['lop']?> "/>
                </div>
                <button type="submit" class="btn btn-success">Cập nhật thông tin sinh viên</button>
            </form>
        </div>
    </body>
</html>
