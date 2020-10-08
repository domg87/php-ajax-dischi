<?php include "partials/head.php" ?>


<body>

    <?php include "partials/header.php" ?>
    <?php include "partials/db.php" ?>
    <div class="container">
        <?php foreach($database as $album) { ?>
            <div class="album">
                <img class="poster" src="<?php echo $album["poster"]; ?>" alt="">
                <h4><?php echo $album["title"]; ?></h4>
                <h5><?php echo $album["author"]; ?></h5>
                <h5><?php echo $album["year"]; ?></h5>
            </div>
            
        <?php } ?>
    </div>
    <script src="dist/app.js"></script>
</body>
</html>