<?php
/**
 * Created by PhpStorm.
 * User: KVS
 * Date: 06.02.2018
 * Time: 14:46
 */
require_once('db.php');
require_once('header.php');

$sql = "SELECT id, title, description, category FROM items";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo '<div class="container">
            <div>
                <h1><a href="item.php?id=' . $row["id"]. '">' . $row["title"]. '</a></h1>
                <p>' . $row["category"] . '</p>
                <p>' . $row["description"] . '</p>
            </div>
        </div>';

//        $data = "id: " . $row["id"]. " - Title: " . $row["title"]. " " . $row["description"] . $row["category"]."<br>";
    }
} else {
    echo "0 results";
}

