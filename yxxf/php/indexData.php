<?php
// 首页 图片 系列名称
$sql = 'select * from ind';
$query = mysqli_query($con, $sql);
$arr = [];
while( $data = mysqli_fetch_assoc($query)){
    array_push($arr,$data);
};
?>
