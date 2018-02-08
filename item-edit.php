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
$sql = "SELECT id, title, description, category FROM items WHERE id = {$id}";
$result = $connection->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '
            <div class="container">
                <form class="form-edit row" method="post" action="save-changes.php">
                    <h1 class="h3 mb-3 font-weight-normal text-center">Edit item</h1>
                    <input type="hidden" name="id" value="' . $row["id"] . '">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="' . $row["title"] . '">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" id="category" name="category" value="' . $row["category"] . '">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea style="height: 400px;" name="description" class="form-control" id="description">' . $row["description"] . '</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>';
        }
}




//<div class="container">
//            <div>
//                <input type="text" name="title" value="' . $row["title"] . '">
//                <input type="text" name="category" value="' . $row["category"] . '">
//                <textarea name="description">' . $row["description"] . '</textarea>
//            </div>
//        </div>';
//        }
//}