<!DOCTYPE html>
<html>
    <head>
        <title>Distance from Chicago!</title>
    </head>
    <body>
        <font size="5" color="Blue">Welcome to the Distance calculation</font>
        <br> The page calculates the distances from Chicago!
        <br> Select a destination:
        <form action="CheckDistance.php" method="GET">
            <?php
            $cities = array(
                'Dallas', 'Toronto', 'Boston' ,
                'Nashville' , 'Las Vegas' ,
                'San Francisco', 'Washington, DC',
                'Miami' , 'Pittsburgh');
            for ($i=0; $i < count($cities); $i++) { 
                print"<input type=\"checkbox\" value=$i name=\"destination[]\">$cities[$i]";
                print"<br>";
            }       
            ?>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </body>
</html>