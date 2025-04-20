<?php 
class shape{
    public function calcArea(){
        return 0;
    }
}
// Triangle class
class Triangle extends shape{
    private $base;
    private $height;
    public function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }
    public function calcArea(){
        return 0.5 * $this->base * $this->height;
    }
}
// Square class
class Square extends shape{
    private $side;

    public function __construct($side){
        $this->side = $side;
    }
    public function calcArea(){
        return $this->side * $this->side;
    }
}

class Circle extends shape{
    private $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function calcArea(){
        return 3.14 * $this->radius * $this->radius;
    }
}

$area = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['shape'])){
        $shapeSelected = $_POST['shape'];
        switch($shapeSelected){
            case "triangle":
                $base = $_POST['base'];
                $height = $_POST['height'];
                $shape = new Triangle($base, $height);
                $area = "Area of triangle: ".$shape->calcArea();
                break;
            case "square":
                $side = $_POST['side'];
                $shape = new Square($side);
                $area = "Area of square: ".$shape->calcArea();
                break;
            case "circle":
                $radius = $_POST['radius'];
                $shape = new Circle($radius);
                $area = "Area of Circle: ".$shape->calcArea();
                break;
        }
    }
    echo $area;
}

?>