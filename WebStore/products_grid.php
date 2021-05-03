<?php
$table_name = "products";
$SELECT = "SELECT product_id,product_name,product_price,product_image_url,product_brand,product_description FROM $table_name WHERE product_name LIKE '%" . $_POST["search"] . "%' LIMIT 13";
$res = mysqli_query($conn, $SELECT);
$arr = mysqli_fetch_array($res);
$my_array = array();

$index = 0;
while ($row = mysqli_fetch_assoc($res)) { // loop to store the data in an associative array.
    $my_array[$index] = $row;
    $index++;
}
