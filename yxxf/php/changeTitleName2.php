<?php
$Dtitle0 =  $_POST['Dtitle0'];
$Dtitle3 =  $_POST['Dtitle3'];
include '../connectSql.php';
$updateTitle = "update titleName set detailT1 = '{$Dtitle0}',detailT3 = '{$Dtitle3}'";
$query = mysqli_query($con, $updateTitle);
if(!$query){
    echo mysqli_error($con);
    echo "<script>alert('修改失败')</script>";
}else{
    echo "<script>alert('修改成功')</script>";
    header('refresh:0; url=ind.php');
}
?>