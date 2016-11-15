<?php
$db_config["hostname"]    = "localhost";    //服务器地址
$db_config["username"]    = "root";        //数据库用户名
$db_config["password"]    = "password";        //数据库密码
$db_config["database"]    = "dbname";        //数据库名称
$db_config["charset"]        = "utf8";
include('db.class.php');
$db    = new db();
$db->connect($db_config);
$sql = "select * from table_name";
$row = $db->row_query($sql);