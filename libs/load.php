<?php

function load_templates($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/_templates/$name.php";
}