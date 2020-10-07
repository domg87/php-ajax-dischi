<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title>php-ajax-dischi</title>
</head>
<body>
<?php include "partials/db.php" ?>
    <div class="container">
        <?php foreach($database as $album) { ?>
            <h4><?php echo $album["title"]; ?></h4>
        <?php } ?>
    </div>
</body>
</html>