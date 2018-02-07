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
$sql = "DELETE FROM items WHERE id='".$id."'";

if ($connection->query($sql) === TRUE) {
    echo '<div class="container">
            <h1>Record deleted successfully</h1>
        </div>';
} else {
    echo "Error updating record: " . $connection->error;
}
