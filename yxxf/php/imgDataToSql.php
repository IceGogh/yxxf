<?php
    include '../connectSql.php';
    $sql = "insert into detail (mainTitle, title2, url, kindof) value ('伊雪公司','伊雪公司','{$kindof}/{$imgname}{$imgType}', '$kindof')";
var_dump($sql);
    if(mysqli_query($con, $sql)){
        echo "<script>alert('success!')</script>";
    }else{
        echo 'error:'.mysqli_error($con);
    }
?>