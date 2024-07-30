<?php
include_once "libs/load.php";
echo "<pre>";
$check = check();
$result = result();
$names = array_column($check, 'name');
if (in_array($result['name'],$names))
{
    print("found");
}
else
{
    print("not found");
}

print_r($check);
print_r($result);
echo "</pre>";
?>