<html>
<head>
<style>
    body{
        background-color: #888844;
        background-size: cover;
    }
  
    button:hover{
        cursor: pointer;
        background-color: green;
        color: white;
    }
    
    </style>
</head>
<body>
<center>
    <div style="color white; border:5px solid black; font-family: sans-serif; background:white;width:400px;position:absolute;margin-left:500px;">
    <h3 style="color: #888844;">
        
   <div>
    <img src="apc.jpg">
    </div>
<?php 
    class vehicle{
        //declaring member variable here
        var $type;
        var $fuel;
        var $capacity;
        var $speed;


        //declaring member functions here
        function setType($typ){
            $this->type = $typ;
        }
        function getType(){
            echo"<p>vehicle type: $this->type</p>";
        }
        function setFuel($gas){
            $this->fuel = $gas;
        }
        function getFuel(){
            echo"<p>fuel type: $this->fuel</p>";
        }
        function setCapacity($cap){
            $this->capacity = $cap;
        }
        function getCapacity(){
            echo"<p>passenger: $this->capacity</p>";
        }
          function setSpeed($spd){
            $this->speed = $spd;
        }
        function getSpeed(){
            echo "<p>speed: $this->speed</p>";
        }

    }
    $physics = new vehicle();
    $physics->setType("Armoured Personel Carrier(APC)");
    $physics->getType();

    $physics = new vehicle();
    $physics->setFuel("Diesel");
    $physics->getFuel();

    $physics = new vehicle();
    $physics->setCapacity("10-14");
    $physics->getCapacity();
        
        $physics = new vehicle();
    $physics->setSpeed("100-150 km/h");
    $physics->getSpeed();
        
        
    echo '<img src="truck.jpg" />';
        
    $physics = new vehicle();
    $physics->setType("6x6 Truck");
    $physics->getType();

    $physics = new vehicle();
    $physics->setFuel("Diesel");
    $physics->getFuel();

    $physics = new vehicle();
    $physics->setCapacity("16-20");
    $physics->getCapacity();
        
        $physics = new vehicle();
    $physics->setSpeed("95-120 km/h");
    $physics->getSpeed();
    
        

?>
        </h3>
</div>
    
   
  
</center>
</body>
</html>
