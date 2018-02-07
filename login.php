<?php
/**
 * Created by PhpStorm.
 * User: KVS
 * Date: 06.02.2018
 * Time: 14:43
 */

require_once('db.php');
require_once ('session.php');


$checkUser = "SELECT id, login, password FROM users";
$resultUser = $connection->query($checkUser);
if ($resultUser->num_rows > 0) {

    while ($row = $resultUser->fetch_assoc()) {
        if ($row["login"] == $_POST['login'] && $row["password"] == $_POST['password']) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: /index.php");
            exit();
        }
    }
}

require_once('header.php');
?>

<div class="container">
    <form class="form-signin row" method="post" action="login.php">
        <h1 class="h3 mb-3 font-weight-normal text-center">Please sign in</h1>
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" placeholder="Enter login" name="login">
            <small id="emailHelp" class="form-text text-muted">We'll never share your login with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>