<?php

        class Cars
        {
        // methods 1
        function forwards($car_name = "default"){
            echo "$car_name Is moving forwards <br>";
        }
        // methods 2
        function backwards($car_name = "default"){
            return "$car_name is moving backwards <br>";
        }
    }

    $obj = new Cars;
    
   echo $obj-> forwards('Gaffer');
   
    echo $obj-> backwards();
   $toyata = new Cars;
  echo $toyata-> backwards('Toyata');

  $honda = new Cars;
  echo $honda-> backwards('Honda');


?>