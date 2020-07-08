<?php
# 获取商品列表接口
include "../db/linkdb.php";
$action=$_GET["action"];
if($action=="list"){
    $tapid=intval($_GET["tap"]);
    if (!@$_GET["scolll"]){
        $scoll =1;
    }else{
       $scoll =  $_GET["scolll"];
    }
    #展现多少元素
    $pagesize=$scoll*12;
    $sql ="select * from comInfotab where fid='{$tapid}' limit 0,{$pagesize}";
    $result = mysql_query($sql);
    $listdb=array();
    while ($rs =  mysql_fetch_array($result)){
        $listdb[]= $rs;
    }
    echo json_encode($listdb,JSON_UNESCAPED_UNICODE);
}

/*
 * 计算该id商品种类下能刷新几次
 *
 * id=$_GET["itemid"]
 * */
if ($action == 'zs'){
    #获得当前点击的标签id
    if (!@$_GET["itemid"]){
        $itemid=1;
    }else{
        $itemid=intval($_GET["itemid"]);
    }
    #查询指定fid的内容共有多少条
    $result = mysql_query( "select count(*)as 'count' from comInfotab where fid='{$itemid}'");
    $arr = mysql_fetch_array($result);
    $pagenum =  $arr['count'];
    #计算第一次12条情况能有几次
    $itemnum = ceil($pagenum/12);
    echo $itemnum;
}

if ($action == 'id'){
    #获得当前点击的标签id
    if (!@$_GET["itemid"]){
        $itemid=1;
    }else{
        $itemid=intval($_GET["itemid"]);
    }
}
