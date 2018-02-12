<?php
/**
 * Created by PhpStorm.
 * User: KVS
 * Date: 06.02.2018
 * Time: 17:10
 */
require_once('db.php');
require_once('header.php');
require_once('session.php');


$sql_category= "SELECT category_id, category_name FROM category";
$result_category = $connection->query($sql_category);

$category_list = [];

if ($result_category->num_rows > 0) {
    while ($row = $result_category->fetch_assoc()) {
        $category_list[] = $row;
    }
}

$checkUser = "SELECT id, login, password FROM users";
$resultUser = $connection->query($checkUser);
if ($resultUser->num_rows > 0) {
// output data of each row
    while ($row = $resultUser->fetch_assoc()) {
        if ($user_id) {
            $_SESSION['user_id'] = $row['id'];

            echo '
        <div class="container">
            <form class="form-edit row" method="post" action="save-new-item.php">
                <h1 class="h3 mb-3 font-weight-normal text-center">Edit item</h1>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category_id">
                    ';
            foreach ($category_list as $key => $value) {
                echo '
                                                    <option value = "' . $value["category_id"] . '"> ' . $value["category_name"] . '</option>
                                                ';
                var_dump($value["id"]);
            }
            echo '
                </select>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea style="height: 400px;" name="description" class="form-control" id="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>';
        }
    }
}else{
    header('Location: /login.php');
}