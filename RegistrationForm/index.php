<?php

$username = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$country = $_POST["country"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$gender = $_POST["gender"];

// getting data from json url
$url = 'https://raw.githubusercontent.com/BestBuyAPIs/open-data-set/master/products.json';
$json_content = file_get_contents($url);
// convert json to array
$cnotent_array = json_decode($json_content, true);
$len = sizeof($cnotent_array);

if ($password != $cpassword) {
    echo "please enter the same password in the confirmation";
    die();
} else {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "mydb";

    // connect to db
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    // check connection
    if (mysqli_connect_error()) {
        die("Connection Error : " . mysqli_connect_errno() . "." . mysqli_connect_error());
    } else {
        $SELECT = "SELECT email FROM users WHERE email = ? LIMIT 1";
        $INSERT = "INSERT INTO users (name, email,phone,country,password,gender) values(?,?,?,?,?,?)";

        // execute 
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum == 0) {
            // no user with that email
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssisss", $username, $email, $phone, $country, $password, $gender);
            $stmt->execute();
            echo "Registration successful :)";
        } else {
            echo "This Email Already Existe, Login ? $len";
        }
        $stmt->close();
        $conn->close();
    }
}
