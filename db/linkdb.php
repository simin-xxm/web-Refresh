<?php
/**
 * Created by : PhpStorm
 * User: SIMIN
 * Date: 2020/6/5
 * Time: 10:43
 */

header("content-type:text/html;charset=utf-8");

//连接数据库
$link = mysql_connect("localhost",'root','root');
if (!$link) echo "<script>alert('连接数据库失败！')</script>";

mysql_select_db("ajaxdb",$link);    //选择数据库
mysql_query("set names 'utf8"); //解决中文乱码

