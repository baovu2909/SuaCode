<!-- Here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    td{
        text-align: center;
    }  
    #cot1{
        margin: auto;
    } 
</style>
<body>
   <?php
    require("connect.php"); // Cụm này nên để ở đầu trang 
   ?>
    <table align="center" width= "100%" border="0px" cellspacing= "0px" style="text-align: center">
    <tr>
        <th colspan="11 ">
            <h1>CHỨC NĂNG CƠ BẢN CỦA TRANG ADMIN</h1> <!-- Đề bảo như này hả? Cái tiêu đề ko đúng cái mình đang làm -->
        </th> 
    </tr>
    <tr id="cot1">
        <th>STT</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Chức năng</th>
    </tr>
    <?php
    $LaySP = "SELECT * From tbl_sanpham";
    $BangSP = mysqli_query($conn, $LaySP);
    if (mysqli_num_rows($BangSP) >0 ) { 
        $STT = 0;
        while ($row = mysqli_fetch_assoc($BangSP)) {
            $STT++; // bỏ ghi ở dưới luôn 
            $Ma = $row['MaSP'];
            echo("<tr>");
            echo("<td>" . $STT."</td>"); // Đổi nó thành $STT++ ở trên
            echo("<td>" . $row['MaSP']."</td>"); // Đổi luôn thành $Ma
            echo("<td>" . $row['TenSP']."</td>");
            echo("<td>" . $row['SoLuong']."</td>");
            echo("<td><a herf = xoa.php?id=$Ma'>Xóa</a> "); // Chỗ này thiếu </td>
            echo("</tr>");
        }
    }
    ?>
    </table>
</body>
</html>