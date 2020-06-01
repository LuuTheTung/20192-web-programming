<?php

$colors = array(
    'black' => '#0000000',
    'white' => '#fffffff',
    'red' => '#ff00000',
    'blue' => '#0000ff'
);

$bg_name = $_POST['background'];
$fg_name = $_POST['foreground'];

setcookie('bg', $colors[$bg_name]);
setcookie('fg', $colors[$fg_name]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11.2.2</title>
</head>
<body>
    Thank you. Your preferences have been changed to : <br/>
    Background: <?= $bg_name ?> <br/>
    Foreground: <?= $fg_name ?> <br/>

    Click <a href="prefs-demo.php">Here</a> to see the preferences in actions.
</body>
</html>