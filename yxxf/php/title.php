<?php

// 首页 title部分内容
$sqlTitle = 'select * from titleName';
$queryTitle = mysqli_query($con, $sqlTitle);
$Title = mysqli_fetch_assoc($queryTitle);
?>