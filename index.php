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




$page = 1;
if (isset($_GET['page'])) {
    $page = (int)$_GET['page'];
}

$page_size = 10;
$offset = ($page - 1) * $page_size;

$total_pages_sql = "SELECT COUNT(*) as c FROM items";
$result = mysqli_query($connection,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)['c'];
$total_pages = ceil($total_rows / $page_size);



$sql = "SELECT items.*, category.category_name as category_name FROM items left join category ON items.category = category.category_id LIMIT $offset, $page_size";
$result_items = $connection->query($sql);

$all_items = [];

if ($result_items->num_rows > 0) {
    while ($row = $result_items->fetch_assoc()) {
        $all_items[] = $row;
    }
}


$checkUser = "SELECT id, login, password FROM users";
$resultUser = $connection->query($checkUser);
if ($resultUser->num_rows > 0) {

    while ($row = $resultUser->fetch_assoc()) {
        if ($user_id) {
            $_SESSION['user_id'] = $row['id'];

            foreach ($all_items as $key => $value) {
                echo '<div class="container">
                        <div>
                            <h1><a href="item-edit.php?id=' . $value["id"] . '">' . $value["title"] . '</a></h1>
                            <p><a href="categories.php?cat=' . $value["category"] . '">' . $value["category_name"] . '</a></p>
                            <p>' . $value["description"] . '</p>
                            <a class="btn btn-primary" href="item-edit.php?id=' . $value["id"] . '">Edit</a>
                            <a class="btn btn-danger" href="remove.php?id=' . $value["id"] . '">Remove</a>
                        </div>
                    </div>';
            }
        } else {
            foreach ($all_items as $key => $value) {

                echo '<div class="container">
            <div>
                <h1><a href="item.php?id=' . $value["id"] . '">' . $value["title"] . '</a></h1>
                <p><a href="categories.php?cat=' . $value["category"] . '">' . $value["category_name"] . '</a></p>
                <p>' . $value["description"] . '</p>
            </div>
        </div>';
            }
        }
        ?>

        <div class="container">
            <ul class="pagination">
                <?php

                for($i = 1; $i <= $total_pages; $i++){
                    echo '<li><a href="?page=' . $i . '">' . ($i) . '</a></li>';
                }
                ?>
            </ul>
        </div>
<?php
    }
}else{
    header('Location: /login.php');
}



