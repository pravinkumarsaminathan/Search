<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assests/side_logo.svg">
    <title>Search</title>
    <?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/css/".basename($_SERVER['PHP_SELF'],".php").".css"))
    { ?>
    <link 
        href="/css/<?php print(basename($_SERVER['PHP_SELF'],".php"))?>.css"
        rel="stylesheet">
    <?php } ?>
</head>