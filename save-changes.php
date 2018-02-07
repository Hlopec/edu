<?php
/**
 * Created by PhpStorm.
 * User: KVS
 * Date: 06.02.2018
 * Time: 14:46
 */
require_once('db.php');
require_once('header.php');


$id = $_GET["id"];
$sql = "UPDATE items SET title='".$_POST['title']."', category='".$_POST['category']."', description='".$_POST['description']."' WHERE id='".$_POST['id']."'";

if ($connection->query($sql) === TRUE) {
    echo '<div class="container">
            <h1>Record updated successfully</h1>
        </div>';
} else {
    echo '<div class="container">
            <h1>Error updating record: ' . $connection->error. '</h1>
        </div>';
}