<?php
session_start();
if(!$_SESSION['uid']){
    header("location: ../log/admin.html");
}