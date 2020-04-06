<!DOCTYPE html>
<html>
    <head>
        <title>Distance and time calculation</title>
        <style>
            table, td { 
                border: 1px solid black;
                padding: 1px;
                text-align: left; 
            };
        </style>
    </head>
    <body>
        <font color="blue" size="5">Tuna Cafe Results Received</font>
        <?php 
            $cities = array('Dallas', 'Toronto', 'Boston' ,'Nashville' , 'Las Vegas' ,
                'San Francisco', 'Washington, DC','Miami' , 'Pittsburgh');
            $distances = array('Dallas'=>803,'Toronto'=>435,'Boston'=>848,
                            'Nashville'=>406,'Las Vegas'=>1526,
                            'San Francisco'=>1835, 'Washington, DC'=>595,
                            'Miami' => 1189, 'Pittsburgh'=>409);
            $destination = $_GET["destination"];
        ?>
        <table>
        <?php
            if(empty($destination)){
                print "<br>Sorry, do not have any destinations information";
            }
            elseif(count($destination) == 1){
                $place = $cities[$destination[0]];
                $value = $distances[$place];
                $time = round($value/60,2);
                $walktime = round($value/5,2);
                print("<br>The distance between Chicago and <i>$place</i> is $value miles.");
                print("<br>Driving at 60 miles per hour it would take $time hours");
                print("<br>Walking at 5 miles per hour it would take $walktime hours.");
            }
            else{
                $row = 1;
                print "<tr><td>No.</td><td>Destination</td><td>Distance</td><td>Driving time</td><td>Walking time</td></tr>";
                foreach ($destination as $des){
                    $place = $cities[$des];
                    if(isset($distances[$place])){
                        $value = $distances[$place];
                        $time = round($value/60,2);
                        $walktime = round($value/5,2);
                        print "<tr><td>$row</td><td>$place</td><td>$value</td><td>$time</td><td>$walktime</td></tr>";
                        $row++;
                    }
                }
            }
        ?>
        </table>
    </body>   
</html>