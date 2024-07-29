<?php
include_once "libs/load.php";

$result = result();
?>
<div class="container">
        <img src="assests/<?php print($result['name'])?>.jpg" alt="Fruit Image">
        <div class="content">
            <h1 class="title"><?php print($result['name']) ?> Attributes</h1>
            <ul class="list">
                <li>Color: <?php print($result['color'])?></li>
                <li>Weight: <?php print($result['weight'])?> grams</li>
                <li>Size: <?php print($result['size'])?></li>
                <li>Shape: <?php print($result['shape'])?></li>
                <li>Taste: <?php print($result['taste'])?></li>
                <li>Texture: <?php print($result['texture'])?></li>
                <li>Season: <?php print($result['season'])?></li>
                <li>Vitamin Content: <?php print($result['vitamin'])?></li>
                <li>Minerals: <?php print($result['minerals'])?></li>
                <li>Origin: <?php print($result['origin'])?></li>
            </ul>
        </div>
    </div>