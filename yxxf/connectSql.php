<?php
    $con = mysqli_connect('118.193.241.3', 'root', 'Novellus2010~');
    if (!$con){
        die("connect mysql fail!失败咯");
    }
    $link = mysqli_select_db($con, 'hbyx');
    mysqli_set_charset($con, "utf8");
    mysqli_query($con ,"set names ’utf8’ ");
    mysqli_query($con ,"set character_set_client=utf8");
    mysqli_query($con ,"set character_set_results=utf8");
    if($link){
        echo "connect success成功 ! ".'<br/>';
    }else{
        echo "连接失败!";
    }
?>