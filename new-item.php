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
            <input type="text" class="form-control" id="category" name="category">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea style="height: 400px;" name="description" class="form-control" id="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>';