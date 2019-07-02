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
<script src="https://kit.fontawesome.com/e72006f95b.js"></script>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <title>Hashtag_PHP</title>
</head>
<body>
<?php echo($gen->buildTree($api->get_product_data())) ?>
</body>
<script type="text/javascript" src="javascript.js"></script>
</html>