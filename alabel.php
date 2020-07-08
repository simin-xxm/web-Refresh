<?php
/**
 * Created by : PhpStorm
 * User: SIMIN
 * Date: 2020/6/10
 * Time: 16:33
 */

include "./db/linkdb.php";
$sql ="select * from comclasstab";
$result = mysql_query($sql);

$tapdb=array();

while ($rs =  mysql_fetch_array($result)){
    $tapdb[]= $rs;
}


if (isset($_GET['id'])){
    @$id = $_GET["id"];
}else{
    $id = 1;
}



#查询指定fid的内容共有多少条
    $result = mysql_query( "select count(*)as 'count' from comInfotab where fid={$id}");
    $arr = mysql_fetch_array($result);
    $pagenum =  $arr['count'];
#计算每页8条情况下一共有多少页
    $itemnum = ceil($pagenum/8);


    $page = 1;



/*
 *分页
 *
 * */

$iu=1;
if (isset($_GET['items'])){
    $page = $_GET['items'];
}
if (isset($_GET['str'])){
    $iu+=1;
    $page = $_GET['str'];
    $io = $page-1;
}
if ($iu<=$itemnum){
    $iu+=1;
    $io = $page-1;
}else if ($iu>$itemnum){
    $iu=1;
}

$start=($page-1)*8;
$sql ="select * from comInfotab where fid={$id} limit {$start},8";
$result = mysql_query($sql);
$listdb=array();
while ($rs =  mysql_fetch_array($result)){
    $listdb[]= $rs;
}





require 'web/abq.html';