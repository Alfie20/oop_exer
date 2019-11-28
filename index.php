<html>
<head>
<style>
    body{
        background-color: aqua;
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
    <div style="color white; border:5px solid black; font-family: sans-serif; background:white;width:400px;position:absolute;margin-top:300px;margin-left:470px;">
    <h3 style="color: red;">
<?php 
    class book{
        //declaring member variable here
        var $price;
        var $title;
        var $author;


        //declaring member functions here
        function setPrice($prce){
            $this->price = $prce;
        }
        function getPrice(){
            echo $this->price."<br/>";
        }
        function setTitle($tit){
            $this->title = $tit;
        }
        function getTitle(){
            echo $this->title."<br/>";
        }
        function setAuthor($aut){
            $this->author = $aut;
        }
        function getAuthor(){
            echo $this->author."<br/>";
        }

    }
    $physics = new Book();
    $physics->setPrice("Price:500.00");
    $physics->getPrice();

    $physics = new Book();
    $physics->setTitle("Title:AstroPhysics");
    $physics->getTitle();

    $physics = new Book();
    $physics->setAuthor("Author:Jean Dufay");
    $physics->getAuthor();
?>
</h3>
</div>
    <div style="width:400px;">
    <img src="book.jpg">
    </div>
    
    
    <button style="margin-top:10px; border-radius:5px;width: 80px; height: 30px;margin-top:150px; ">Buy</button>
</center>
</body>
</html>
