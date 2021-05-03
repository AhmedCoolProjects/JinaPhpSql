<?php
$table_name = "products";
$SELECT = "SELECT product_id,product_name,product_price,product_image_url,product_brand FROM $table_name LIMIT 10";
$res = mysqli_query($conn, $SELECT);
$arr = mysqli_fetch_array($res);
$my_array = array();

$index = 0;
while ($row = mysqli_fetch_assoc($res)) { // loop to store the data in an associative array.
    $my_array[$index] = $row;
    $index++;
}
