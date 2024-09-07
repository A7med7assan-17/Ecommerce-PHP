<?php 

include "../connect.php";

$table   = "address";

$usersid = filterRequest("usersid");
$name    = filterRequest("name");
$city    = filterRequest("city");
$street  = filterRequest("street");
$data    = array(
"address_usersid" => $usersid,
"address_name"    => $name,
"address_city"    => $city,
"address_street"  => $street,
);

insertData($table,$data);