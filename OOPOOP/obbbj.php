<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Php Classes</h1>
    <?php
    class Fruit{
        public $name;
        public $color;
        function set_name($name){
            $this->$name = $name;
        }
        function get_name($name){
            return $this ->$name;
        }
    }
    $apple = new Fruit();
    $orange = new Fruit();
    $apple ->set_name('Apple');
    $orange ->set_name('Orange');

    echo $apple->get_name();
    echo "<br>";
    echo $orange->get_name();
    ?>
</body>
</html>