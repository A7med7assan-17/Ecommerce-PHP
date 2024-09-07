<?php 

include "../connect.php";

$id = filterRequest("id");

getAllData("MyFavorite","favorite_usersid = ? ", array($id));



