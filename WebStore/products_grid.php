<?php
$SELECT = "SELECT name,type,price,image FROM my_csv_file LIMIT 10";
$res = mysqli_query($conn, $SELECT);
$arr = mysqli_fetch_array($res);
$my_array = array();

$index = 0;
while ($row = mysqli_fetch_assoc($res)) { // loop to store the data in an associative array.
    $my_array[$index] = $row;
    $index++;
}
