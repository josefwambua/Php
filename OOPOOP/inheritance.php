<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fruit {
        public $name;
        public $color;
        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        public function intro(){
            echo "A {$this->name} is a fruit and the color is {$this->color}";
        }
    }

    class Cherry extends Fruit {
        public function message(){
            echo "Is cherry a fruit or a berry?";
        }
    }

    // Create an instance of Cherry
    $cherry = new Cherry("Cherry", "Red");
    $cherry->message(); // Output: "Is cherry a fruit or a berry?"
    $cherry->intro();   // Output: "A Cherry is a fruit and the color is Red"
    ?>
</body>
</html>
