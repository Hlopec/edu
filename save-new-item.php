<?php
/**
 * Created by PhpStorm.
 * User: KVS
 * Date: 07.02.2018
 * Time: 14:27
 */

require_once('db.php');
require_once('header.php');
require_once ('session.php');


$sql = "INSERT INTO items (title, category, description) VALUES ('".$_POST['title']."', '".$_POST['category']."', '".$_POST['description']."')";
$connection->query($sql);

    echo '<div class="container">
            <h1>Completed</h1>
        </div>';