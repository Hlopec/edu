<?php
/**
 * Created by PhpStorm.
 * User: KVS
 * Date: 06.02.2018
 * Time: 14:11
 */

define('db_user', 'root');
define('db_password', 'vertrigo');
define('db_host', 'localhost');
define('db_name', 'edu');

$connection = mysqli_connect(db_host, db_user, db_password, db_name);

if(!$connection){
    die('error connection to the database');
}

//echo 'connection success';