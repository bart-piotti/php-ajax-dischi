<?php
require "./src/cd-json.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./dist/style.css">
    </head>
    <body>
        <div class="cds-container container">
            <?php
            foreach ($cds as $key => $cd) {
                ?>
                <div class="cd">
                    <img src="<?php echo $cd['poster'] ?>" alt="">
                    <h3><?php echo $cd['title'] ?></h3>
                    <span class="author"><?php echo $cd['author'] ?></span>
                    <span class="year"><?php echo $cd['year'] ?></span>
                </div>
            <?php } ?>
        </div>
    </body>
</html>
