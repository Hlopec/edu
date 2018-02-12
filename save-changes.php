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

$sql = "UPDATE items SET title='".$_POST['title']."', category='{$_POST['category_id']}', description='".$_POST['description']."' WHERE id='".$_POST['id']."'";

$checkUser = "SELECT id, login, password FROM users";
$resultUser = $connection->query($checkUser);
if ($resultUser->num_rows > 0) {
// output data of each row
    while ($row = $resultUser->fetch_assoc()) {
        if ($user_id) {
            $_SESSION['user_id'] = $row['id'];

            if ($connection->query($sql) === TRUE) {
                echo '<div class="container">
            <h1>Record updated successfully</h1>
        </div>';
            } else {
                echo '<div class="container">
            <h1>Error updating record: ' . $connection->error . '</h1>
        </div>';
            }
        }
    }
}else{
    header('Location: /login.php');
}