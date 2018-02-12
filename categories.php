<?php
/**
 * Created by PhpStorm.
 * User: KVS
 * Date: 06.02.2018
 * Time: 12:05
 */
 require_once('header.php');
 require_once('db.php');
 require_once ('session.php');

$category = $_GET["cat"];

$checkUser = "SELECT id, login, password FROM users";
$resultUser = $connection->query($checkUser);
if ($resultUser->num_rows > 0) {

    while ($row = $resultUser->fetch_assoc()) {
        if ($user_id) {
            $_SESSION['user_id'] = $row['id'];

            $sql = "SELECT * FROM items WHERE category LIKE '$category'";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

                    echo '<div class="container">
            <div>
                <h1><a href="item-edit.php?id=' . $row["id"] . '">' . $row["title"] . '</a></h1>
                <p><a href="categories.php?cat=' . $row["category"] . '">' . $row["category"] . '</a></p>
                <p>' . $row["description"] . '</p>
                <a class="btn btn-primary" href="item-edit.php?id=' . $row["id"] . '">Edit</a>
                <a class="btn btn-danger" href="remove.php?id=' . $row["id"] . '">Remove</a>
            </div>
        </div>';
                }
            }
        } else {
            $sql = "SELECT * FROM items WHERE category LIKE '$category'";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

                    echo '<div class="container">
            <div>
                <h1><a href="item.php?id=' . $row["id"] . '">' . $row["title"] . '</a></h1>
                <p><a href="categories.php?cat=' . $row["category"] . '">' . $row["category"] . '</a></p>
                <p>' . $row["description"] . '</p>
            </div>
        </div>';
                }
            }
        }
    }
}else{
    header('Location: /login.php');
}