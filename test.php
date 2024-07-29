<?php
include_once "libs/load.php";

// $servername = get_config("server");
// $username = get_config("username");
// $password = get_config("password");

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// Check connection
// $conn = Database::getConnection();
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $name = ucfirst($_POST['search']);
// $query = "SELECT * FROM `search` WHERE `name` = '$_POST[search]' ";
// $a = "touch a.txt";
// system($a);
// $result =$conn->query($query);
// if ($result->num_rows > 0)
// {
//     $row = $result->fetch_assoc();
//     print_r($row);
// }
// else
// {
//     print("error");
// }
// $name = ucfirst($_GET['search']);
// $query = "SELECT * FROM `search` WHERE `name` = '$name' ";
// print($query);

print_r($_SERVER); 
?>