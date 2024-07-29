<?php
include_once "libs/load.php";

// $servername = get_config("server");
// $username = get_config("username");
// $password = get_config("password");

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
$conn = Database::getConnection();
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM `search` WHERE `name` = 'Apple' ";
$result =$conn->query($query);

if ($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    print_r($row);
}
else
{
    print("error");
}

?>