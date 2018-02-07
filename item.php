<?php
/**
 * Created by PhpStorm.
 * User: KVS
 * Date: 06.02.2018
 * Time: 17:10
 */
require_once('db.php');
require_once('header.php');
require_once ('session.php');

$id = $_GET["id"];
$sql = "SELECT id, title, description, category FROM items WHERE id = {$id}";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="container">
            <div>
                <h1>' . $row["title"] . '</h1>
                <p>' . $row["category"] . '</p>
                <p>' . $row["description"] . '</p>
            </div>
        </div>';
        }
}