<?php
session_start();
$account = $_POST['account'];
$password = $_POST['password'];
if(!$account || !$password){
    header("location: admin.html");
}
include '../connectSql.php';
$sql = 'select * from admin where account = '.$account.' and  password ="'.$password.'"';
$query = mysqli_query($con, $sql);
if($result = mysqli_num_rows($query)){
    echo "<script>alert('登录成功!')</script>";
    $_SESSION['uid'] = $account;
    header("location: ../php/ind.php");
}else{
    echo "<script>alert('登录失败!')</script>";
    session_destroy();
    header("location: admin.html");
}
?>