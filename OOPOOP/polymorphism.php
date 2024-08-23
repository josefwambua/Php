<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "A {$this->name} is a fruit and the color is {$this->color}";
    }
}

class Cherry extends Fruit
{
    public $weight;
    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro()
    {
        echo "This is a fruit {$this->name}. the color is {$this->color}, and the weight is {$this->weight} in grams.";
    }
}
$cherry = new Cherry("Cherry", "Bright pink", 29);
$cherry->intro();

?>
</body>
</html>
