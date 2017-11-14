<?php
$title0 =  $_POST['title0'];
$title1 =  $_POST['title1'];
$title2 =  $_POST['title2'];
$title3 =  $_POST['title3'];
include '../connectSql.php';
$updateTitle = "update titleName set title0 = '{$title0}', title1 = '{$title1}', title2 = '{$title2}', title3 = '{$title3}'";
var_dump($updateTitle);
$query = mysqli_query($con, $updateTitle);
if(!$query){
    echo mysqli_error($con);
    echo "<script>alert('修改失败')</script>";
}else{
    echo $title0.$title1;
    echo "<script>alert('修改成功')</script>";
    header('refresh:0; url=ind.php');
}
?>