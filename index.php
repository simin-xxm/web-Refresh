<?php
/**
 * Created by : PhpStorm
 * User: SIMIN
 * Date: 2020/6/9
 * Time: 17:34
*/

include "./db/linkdb.php";
$sql ="select * from comclasstab";
$result = mysql_query($sql);


$tapdb=array();
while ($rs =  mysql_fetch_array($result)){
    $tapdb[]= $rs;
}
require 'web/index.html';
