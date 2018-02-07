<?php
/**
 * Created by PhpStorm.
 * User: KVS
 * Date: 07.02.2018
 * Time: 14:20
 */

session_start();

//session_destroy();

if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);
}

header('Location: /');



