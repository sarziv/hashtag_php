<?php
foreach (glob("Class/*.php") as $filename) {
    include($filename);
}
$gen = new GenerateTree();
$api = new ApiController();
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="index.css">
<head>
    <meta charset="UTF-8">
    <title>Hashtag_PHP_Index</title>
</head>
<body>
<?php echo($gen->buildTree($api->get_product_data())) ?>
</body>
<script type="text/javascript" src="javascript.js"></script>
</html>