<?php

    $klanten = array ( "Willem" => 30, "Walter" => 32, "Martin" => 33, "Dara" => 38, "Henk" => 40 );                         
      


    $average_of_klanten = array_sum($klanten) / count($klanten); 
        echo "<br>"; 

        echo "De gemiddelde leeftijd is . $average_of_klanten ";

        echo "<br>";

        $namen = implode( " ",array_keys($klanten));

        // echo $namen;


        echo "De gemiddelde leeftijd van". $namen. " is " . $average_of_klanten ; 

        
      
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>







</body>

</html>