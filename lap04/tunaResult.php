<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tuna Cafe</title>
    </head>
    <body>
        <?php
            $menu = array('Tuna Casserole', 'Tuna Sandwitch', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');
            $prefer = $_GET["prefer"];
            if (empty($prefer)) {
                print"No choice";
            } else {
                print"<br>Your selection are: <ul>";
                foreach($prefer as $pr)
                print"<li>$menu[$pr]</li>";
                print"</ul>";
            }
        ?>
    </body>
</html>
