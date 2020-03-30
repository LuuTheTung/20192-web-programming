<html>
    <head>
        <meta charset="UTF-8">
        <title>Carpet cost page</title>
    </head>
    <body>
        <?php 
        function calculate_carpet_cost(int $width, int $length,int $grade,int $carpet_cost){
            if($width > 0 && $length > 0){
                if($grade == 1){
                    $carpet_cost = $width * $length * 5;
                    return $carpet_cost;
                } elseif($grade == 2){
                    $carpet_cost = $width * $length * 4;
                    return $carpet_cost;
                } else{
                    print("Unknown carpet grade  = $grade");
                    return 0;
                }
                
            } else{
                return 0;
            }
        }
       
        $width = $_POST["width"];
        $length = $_POST["length"];
        $grade = $_POST["grade"];
        print("Carpet grade = $grade<br>");
        print("Carpet width = $width<br>");
        print("Carpet length = $length<br>");
        $carpet_cost = 0;
        $ret = calculate_carpet_cost($width, $length, $grade, $carpet_cost);
        if($ret){
            $room_size = $width * $length;
            $total_cost = $ret + ($ret*.5);
            print("<br> Total square = $room_size");
            print("<br>Carpet grade = $grade");
            print("<br>Carpet cost = $ret");
            print("<br>Total cost: $total_cost");
        }
        else {
            print("Error");
        }
        ?>
        
    </body>
</html>
