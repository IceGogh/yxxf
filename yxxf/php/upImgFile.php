<?php
// 拦截上传图片是否信息完整
if( !$_POST['kindof'] || !$_POST['imgname'] || $_POST['imgType'] === '000'  ){
    echo "<script>alert('填写图片序号、格式等.')</script>";
    header('refresh:0; url=../php/ind.php');
    die;
}
// 图片信息赋值
$kindof = $_POST['kindof'];
$imgname = $_POST['imgname'];
$imgType = $_POST['imgType'];

// 若图片上传error
if ($_FILES["file"]["error"] > 0)
{
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
}
else
{
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "图片格式: " . $_FILES["file"]["type"] . "<br />";
    echo "图片大小: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("../picture/$kindof/$imgname$imgType"))
    {

//        echo $_FILES["file"]["name"] . " 该目录下已经有同名文件,请检查后重新上传. ";
        echo "<script>alert('该目录下已经有 $imgname$imgType 文件,请检查后重新上传.')</script>";
        header('refresh:0; url=../php/ind.php');
    }
    else
    {
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            $stored_path = "../picture/$kindof/$imgname$imgType";

            if(move_uploaded_file($_FILES['file']['tmp_name'],$stored_path)){
                echo "Stored in: " . $stored_path;
                include_once './imgDataToSql.php';
            }else{
                echo 'Stored failed:file save error';
            }
        }else{
            echo 'Stored failed:no post ';
        }
    }
}
?>