<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê danh sách sinh viên</title>
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
            <h1>Danh sách sinh viên</h1>
            <!-- <a href="them.html" class="btn btn-success">Thêm sinh viên</a> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Thêm mới sinh viên
            </button>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Mã sinh viên</th>
                <th>Họ tên</th>
                <th>Lớp</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
        <?php
            //ketnoi
            require_once 'ketnoi.php';
            //cau lenh
            $lietke_sql = "SELECT * FROM sinhvien order by masv,lop, hoten";
            //thuc thi cau lenh
            $result = mysqli_query($conn, $lietke_sql);
            //duyet qua result va in ra
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['masv'];?></td>
                        <td><?php echo $row['hoten'];?></td>
                        <td><?php echo $row['lop'];?></td>
                        <td>
                            <a href ="edit.php?sid=<?php echo $row['id'];?>" class="btn btn-info">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xoá sinh viên này?');" href ="xoa.php?sid=<?php echo $row['id'];?>" class="btn btn-danger">Xoá</a>
                        </td>
                    </tr>
                <?php
            }
        ?>
        </tbody>
        </table>
        </div>
        <!-- The Modal -->
        <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Form thêm sinh viên</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="them.php" method="post">
                    <div class="form-group">
                        <label for="hoten">Ho tên</label>
                        <input type="text" id="hoten" name="hoten" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="masv">Mã sinh viên</label>
                        <input type="text" id="masv" name="masv" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="lop">Lớp</label>
                        <input type="text" id="lop" name="lop" class="form-control" />
                    </div>
                    <button type="submit" class="btn btn-success">Thêm sinh viên</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>

            </div>
        </div>
        </div>
</body>
</html>

