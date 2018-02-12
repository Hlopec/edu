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

$checkUser = "SELECT id, login, password FROM users";
$resultUser = $connection->query($checkUser);
if ($resultUser->num_rows > 0) {

    while ($row = $resultUser->fetch_assoc()) {
        if ($user_id) {
            $_SESSION['user_id'] = $row['id'];
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
        }
    }
}else{
    header('Location: /login.php');
}