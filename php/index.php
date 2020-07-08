<?php
# 获取商品列表接口
include "../db/linkdb.php";
$action=$_GET["action"];
if($action=="list"){
    $tapid=intval($_GET["tap"]);
    $page=intval($_GET["page"]);
    if(!$page){
        $page=1;
    }
    $start=($page-1)*8;
    $sql ="select * from comInfotab where fid='{$tapid}' limit {$start},8";
    $result = mysql_query($sql);
    $listdb=array();
    while ($rs =  mysql_fetch_array($result)){
        $listdb[]= $rs;
    }
    echo json_encode($listdb,JSON_UNESCAPED_UNICODE);
}

#分页
if($action=="fy"){
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
    #计算每页8条情况下一共有多少页
    $itemnum = ceil($pagenum/8);
    echo $itemnum;
}
