<?php
    $sql = "insert into detail (mainTitle, title2, url, kindof) value ('伊雪公司','伊雪公司','{$kindof}/{$imgname}{$imgType}', '$kindof')";
var_dump($sql);
    if(mysqli_query($con, $sql)){
        echo "<script>alert('上传成功!')</script>";
    }else{
        echo 'error:'.mysqli_error($con);
    }
?>