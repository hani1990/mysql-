# mysql-
mysql数据操作类，封装常用的操作，也可自己写sql
数据库配置可以单独放到配置文件里面
<?php
/*
 * Created on 2013-02-05
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
return array(
    'main' => array(
        'db_reader'	=>	array(
            'driver' =>	'mysql',
            'host'	=>	'localhost',
            'port'	=>	3306,
            'name'	=>	'db_name',
            'user'	=>	'root',
            'pass'	=>	'pass'
        ),
        'db_writer'	=>	array(
            'driver' =>	'mysql',
            'host'	=>	'localhost',
            'port'	=>	3306,
            'name'	=>	'db_name',
            'user'	=>	'root',
            'pass'	=>	'pass'
        ),
    ),
);

?>
