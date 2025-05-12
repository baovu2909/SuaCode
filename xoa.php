<?php
require("connect.php");
if(isset($_GET['id'])){
    $Ma = $_GET['id'];
    mysqli_query($conn, " DELETE from tbl_sanpham WHERE MaSP = '$Ma'" );
    header("location: admin.php");
}