<?php
    // Class
    class Cars
    {
        // Properties
        public $color = "";
        public $doors = "";

        // Magic methods
        function __construct($given_color = 'Orange', $given_door = 4)
        {
                $this->color = $given_color;
                $this->doors = $given_door;
        }
        // methods
        function forwards($car_name = "default"){
            echo "$this->color $car_name with $this->doors doors Is moving forwards <br>";
        }
        // methods
        function backwards($car_name = "default"){
            return "$this->color $car_name with $this->doors doors is moving backwards <br>";
        }
        // Magic methods
        function __destruct()
        {
            echo "Bye <br>";
        }
       

    }

    // Object
    $obj = new Cars('Green');
    echo $obj-> forwards('Gaffer');

    $bmw = new Cars('Yellow',2);
    echo $bmw-> backwards('bmw');

    $audi = new Cars('',5);
    echo $audi-> backwards('audi');


?>