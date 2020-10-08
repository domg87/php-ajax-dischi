<?php include "partials/head.php" ?>

<body>
   
    <?php include "partials/header.php" ?>
   
    <div class="container">
            <script id="entry-template" type="text/x-handlebars-template">
                <div class="album">
                    <img class="poster" src="{{{poster}}}" alt="">
                    <h4>{{title}}</h4>
                    <h5>{{author}}</h5>
                    <h5>{{year}}</h5>
                </div>
            </script>
    </div>

    <script src="dist/app.js" charset="utf-8"></script>
</body>
</html>