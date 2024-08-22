<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Constructors</h2>
    <?php
    class Fruit {
        public  $name;
        public   $color;

        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        function get_name(){
            return $this->name;
        }
        function get_color(){
            return $this->color;
        }
    }    
    $pineapple = new Fruit("Pineapple","White");
    $olive = new Fruit("Olive","pink");
    echo $pineapple->get_name();
    echo "<br>";
    echo $pineapple->get_color();
    echo "<br>";
    echo "<br>";
     echo $olive->get_name();
     echo "<br>";
     echo $olive->get_color();



    ?>
</body>
</html>