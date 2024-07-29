<?php
include_once "_includes/Database.class.php";
function load_templates($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/Search/_templates/$name.php";
}

global $__site_config;
$__site_config = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/../mysql_server.json');

function get_config($key, $default = NULL)
{
    global $__site_config;
    $array = json_decode($__site_config,true);
    if (isset($array[$key]))
        return $array[$key];
    else
        return $default;

}

function result()
{
    $conn = Database::getConnection();
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $name = ucfirst($_GET['search']);
    $query = "SELECT * FROM `search` WHERE `name` = '$name' ";
    $result =$conn->query($query);

    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        return $row;
    }
    else
    {
        return NULL;
    }
}

