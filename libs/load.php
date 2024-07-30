<?php
include_once "_includes/Database.class.php";
function load_templates($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/Search/_templates/$name.php";
}

global $__site_config;
$__site_config = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/../mysql_server.json');

global $__sublink;
$__sublink = $_SERVER['HTTP_HOST'];

function get_config($key, $default = NULL)
{
    global $__site_config;
    $array = json_decode($__site_config,true);
    if (isset($array[$key]))
        return $array[$key];
    else
        return $default;

}

function check()
{
    $conn = Database::getConnection();
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $query2 = "SELECT `name` FROM `search` LIMIT 50";
    $check = $conn->query($query2);
    $results = array();
    while ($row2 = $check->fetch_assoc()) {
        $results[] = $row2;
    }
    return $results;
}

function result()
{
    $check = check();
    $conn = Database::getConnection();
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $name = ucfirst($_GET['search']);
    $query = "SELECT * FROM `search` WHERE `name` = '$name' ";
    $result =$conn->query($query);
    if ($result === false) {
        // Print the error message if the query failed
        echo "Error executing query: " . $conn->error;
    }
    else if ($result->num_rows > 0)
    {    
        $row = $result->fetch_assoc();
        $names = array_column($check, 'name');
        if (in_array($row['name'],$names)){
            return $row;
        }
        else{
            print("Error is ");
            print_r($row);
        }
        
    }
    else
    {
        return NULL;
    }
}


