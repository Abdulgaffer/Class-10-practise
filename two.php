<?php
    // Class
    class Cars
    {
        // methods
        function forwards($car_name = "default"){
            echo "$car_name Is moving forwards <br>";
        }
        // methods
        function backwards($car_name = "default"){
            return "$car_name is moving backwards <br>";
        }
        // Magic methods
        function __construct()
        {
            echo "Hello <br>";
        }
        function __destruct()
        {
            echo "Bye <br>";
        }
       

    }

    // Object
    $obj = new Cars;
    echo $obj-> forwards('Gaffer');
    $bmw = new Cars;
    $audi = new Cars;


?>