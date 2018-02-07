<?php
/**
 * Created by PhpStorm.
 * User: KVS
 * Date: 07.02.2018
 * Time: 14:20
 */

session_start();

$user_id = false;

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}