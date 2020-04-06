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
    <form action="tunaResult.php" method="GET">
        <?php
        $menu = array('Tuna Casserole', 'Tuna Sandwitch', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');
        $best_seller = 2;
        print"Please indicate all your favourite dishes! <br>";
        for ($i=0; $i < count($menu); $i++) { 
            print"<input type=\"checkbox\" value=$i name=\"prefer[]\">$menu[$i]";
            if ($i == $best_seller) {
                print"<font color=red>!Our best seller!</font>";
            }
            print"<br>";
        }
        ?>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
        
    </body>
</html>
