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


//$sql_category= "SELECT items.id, category.category_name FROM items INNER JOIN category ON items.category = category.id;";
$sql_category= "SELECT category_id, category_name FROM category";
$result_category = $connection->query($sql_category);

$category_list = [];

if ($result_category->num_rows > 0) {
    while ($row = $result_category->fetch_assoc()) {
        $category_list[] = $row;
    }
}
//var_dump($category_list);


//"SELECT items.id, category.category_name FROM items INNER JOIN category ON items.category = category.id;
//INSERT INTO table3 ( name, age, sex, city, id, number, nationality)
//SELECT name, age, sex, city, p.id, number, n.nationality
//FROM table1 p
//INNER JOIN table2 c ON c.Id = p.Id
//INNER JOIN table3 n ON n.Id = p.Id";



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
                        <select class="form-control" id="category" name="category_id">';
                        foreach ($category_list as $key => $value) {
                             echo '
                                           <option value = "' . $value["category_id"] . '"> ' . $value["category_name"] .  '</option>
                                        ';
                            }
                            echo '
                </select>
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