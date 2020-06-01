<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Front Door</title>
    </head>
    <?php
    $bg = $_COOKIE['bg'];
    $fg = $_COOKIE['fg'];
    ?>
    <body bgcolor="<?= $bg ?>" text="<?= $fg ?>">
        <h1>Wellcome to the Store</h1>    

        We have many fine products for you to view. Please feel free to browse the aislse and stop an assitant at any time.
        But remember, you break it you bought it!

        Would you like to <a href="PrefSelection.html">Change your preferences?</a>
    </body>
</html>