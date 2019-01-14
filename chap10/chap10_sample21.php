abstract class Shape {
    function setCenter($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    abstract function draw();
    protected $x, $y;
}
//****************************
class Square extends Shape {
    function draw()
    {
        // Here goes the code which draws the Square
        ...
    }
}
//****************************
class Circle extends Shape {
    function draw()
    {
        // Here goes the code which draws the Circle
        ...
    }
}
