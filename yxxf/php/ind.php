<!DOCTYPE html>
<html lang="en">

<?php
include '../log/check.php';
include '../connectSql.php';
$sql = 'select * from titleName';
$query = mysqli_query($con, $sql);
$result = mysqli_fetch_assoc($query);
?>
<head>
    <meta charset="UTF-8">
    <title>伊雪管理页面</title>
    <script src="../js/jquery.min.js"></script>
    <style>
        body {
            background:#666;
        }
        .clearFloat:after{
            content: '';
            display: block;
            height: 0;
            font-size: 0;
            clear:both;
        }
        .leftImg {
            width: 1200px;
            margin: 10px auto;
        }
        .warp {
            width: 1200px;
            margin: 0 auto;
        }
        img{
            width: 50%;
            float: left;
            border: 4px inset #eee;
        }
        form {
            width: 40%;
            float: right;
        }
        input[type="submit"]{
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="warp">
    <h4>主页标题：</h4>
    <div class="leftImg titleName clearFloat">
        <img src="../img/titleName.jpg"/>
        <form method="post" action="changeTitleName.php">
           主标题:<input class="info" name="title0" type="text"  placeholder="主标题" value="<?php echo $result['title0']?>"/><br/>
           徽　标:  <input class="info" name="title1" type="text"  placeholder="徽标" value="<?php echo $result['title1']?>"/><br/>
           次标题: <input class="info" name="title2" type="text"  placeholder="次标题" value="<?php echo $result['title2']?>"/><br/>
           说　明: <input class="info" name="title3" type="text"  placeholder="说明" value="<?php echo $result['title3']?>"/><br/>
            <input type="submit" value="确认修改"/><br/>
        </form>
    </div>
    <h4>详情页标题:</h4>
    <div class="leftImg titleName2 clearFloat">
        <img src="../img/titleName2.jpg"/>
        <form method="post" action="changeTitleName2.php">
           主标题: <input type="text" name="Dtitle0" placeholder="主标题" value="<?php echo $result['detailT1']?>"/><br/>
           联系人: <input type="text" name="Dtitle3" placeholder="联系人" value="<?php echo $result['detailT3']?>"/><br/>
            <input type="submit" value="确认修改"/><br/>
        </form>
    </div>
    上传图片:
    <form method="post" action="upImgFile.php" enctype="multipart/form-data">
        选择图片文件: <input type="file" name="file"/><br/>
        选择图片系列:
        <select name="kindof">
            <option value="laji">垃圾</option>
            <option value="guoshu">果蔬车</option>
            <option value="huanwei">环卫车系列</option>
            <option value="guanche">罐车</option>
            <option value="jiguan">机关车辆</option>
            <option value="junjing">军警车</option>
            <option value="lengcang">冷藏车</option>
            <option value="other">其它车型</option>
            <option value="peijian">消防车配件/取力器</option>
            <option value="qiangxian">抢险车辆</option>
            <option value="xiaofang">消防车系列</option>
        </select>
        <br/>
        图片名字(数字或英文):<input name="imgname" type="text"/>
        <br/>
        图片格式:<select name="imgType">
            <option value="000">--选择图片格式--</option>
            <option value=".jpg">.jpg</option>
            <option value=".png">.png</option>
        </select>
        <br/>
        <input type="submit" name="submit" value="提交"/>
    </form>
</div>

</body>
</html>