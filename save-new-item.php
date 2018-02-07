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


$sql = "INSERT INTO items (title, category, description) VALUES (" . $_POST['description'] .", " . $_POST['description'] .", " . $_POST['description'] .")";
//$connection->query($sql);
//    var_dump($sql);


if ($connection->query($sql) === TRUE) {
    echo '<div class="container">
            <h1>Completed</h1>
        </div>';
} else {
    echo "Error updating record: " . $connection->error;
}
