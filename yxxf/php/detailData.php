<?php
$url = $_SERVER['REQUEST_URI'];
$keywords = substr(strstr($url,'?'), 1);
$keywordsC = '';
$sql1 = 'select * from detail where kindof="'.$keywords.'"';
$query1 = mysqli_query($con, $sql1);
switch($keywords){
    case 'huanwei':
        $keywordsC = '环卫车系列';
        break;
    case 'guanche':
        $keywordsC = '罐车系列';
        break;
    case 'guoshu':
        $keywordsC = '果蔬车';
        break;
    case 'jiguan':
        $keywordsC = '机关车辆';
        break;
    case 'junjing':
        $keywordsC = '军警车辆';
        break;
    case 'laji':
        $keywordsC = '垃圾车系列';
        break;
    case 'lengcang':
        $keywordsC = '冷藏车';
        break;
    case 'other':
        $keywordsC = '其它类型车辆';
        break;
    case 'peijian':
        $keywordsC = '配件底盘取力器相关';
        break;
    case 'qiangxian':
        $keywordsC = '抢险车系列';
        break;
    case 'xiaofang':
        $keywordsC = '消防车系列';
        break;
}
?>