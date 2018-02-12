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

$id = $_GET["id"];
$sql = "SELECT * FROM category";
$result = $connection->query($sql);


$checkUser = "SELECT id, login, password FROM users";
$resultUser = $connection->query($checkUser);
if ($resultUser->num_rows > 0) {
// output data of each row
    while ($row = $resultUser->fetch_assoc()) {
        if ($user_id) {
        $_SESSION['user_id'] = $row['id'];

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $all_categories[] = $row;
                }
            }
            ?>
            <div class="container" style="margin-bottom: 40px;">
                <table class="table-bordered" style="width: 50%">
                    <tbody>
            <?php
                                foreach ($all_categories as $key => $value) {
                    echo '
                        <tr>
                            <td style="width: 75%" class="text-center">'. $value["category_name"]. '</td>
                            <td style="width: 25%" class="text-center"><a class="btn btn-danger" href="remove-category.php?id=' . $value["category_id"] . '">Remove</a></td>
                        </tr>
                  ';
            }
            ?>
                    </tbody>
                </table>
            </div>
            <div class="container">
                <form class="form-edit" method="post" action="new-category-save.php">
                    <label for="category_name">Add Category Name</label>
                    <input type="text" class="form-control" id="category_name" name="category_name">
                    <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Save</button>
                </form>
            </div>
            <?php
        }
    }
}else{
    header('Location: /login.php');
}
