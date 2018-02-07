<?php
/**
 * Created by PhpStorm.
 * User: KVS
 * Date: 06.02.2018
 * Time: 12:39
 */
require_once ('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pages</title>
    <link rel="stylesheet" href="assets/bootstrap-3.3.7/dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-default col-md-12">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <?php if($user_id){
                    echo '
                <li><a href="session_destroy.php">Logout</a></li>
                <li><a href="new-item.php">Add New Item</a></li>';
                } else{
                    echo '
                <li><a href="login.php">Login</a></li>';
                }
                ?>

            </ul>
        </div>
    </nav>
</header>