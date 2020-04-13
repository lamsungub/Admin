<?php
    $id = $_GET['id'];
    include("connect.php"); 
    // lệnh sql xóa 1 bản ghi
    $sql = "DELETE FROM user WHERE id='$id'";
    // sử dụng exec() vì không có kết quả trả về
    $conn->exec($sql);
    $stmt=$conn->prepare($sql);
    header("location:list.php");
?>