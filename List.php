<?php
foreach (glob("Class/*.php") as $filename) {
    include($filename);
}
$gen = new GenerateTree();
$api = new ApiController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hashtag_PHP_List</title>
</head>
<body>
<div>
    <?php echo($gen->buildTree($api->get_product_data())) ?>
</div>
</body>
</html>