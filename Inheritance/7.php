<?php

class Shape {
    // для всех фигур
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function get_name() {
        return $this->name;
    }
}

class Polygon extends Shape {
    protected $sides;
    
    public function __construct($name, $sides) {
        parent::__construct($name);
        $this->sides = $sides;
    }
    
    public function get_sides() {
        return $this->sides;
    }
}

class Triangle extends Polygon {
    public function __construct($name) {
        parent::__construct($name, 3);
    }
}

class IsoscelesTriangle extends Triangle {
    public function __construct() {
        parent::__construct("Равнобедренный треугольник");
    }
}

class EquilateralTriangle extends IsoscelesTriangle {
    public function __construct() {
        parent::__construct();
        $this->name = "Равносторонний треугольник";
    }
}

class Quadrilateral extends Polygon {
    public function __construct($name) {
        parent::__construct($name, 4);
    }
}

class Parallelogram extends Quadrilateral {
    public function __construct() {
        parent::__construct("Параллелограмм");
    }
}

class Rectangle extends Parallelogram {
    public function __construct() {
        parent::__construct();
        $this->name = "Прямоугольник";
    }
}

class Square extends Rectangle {
    public function __construct() {
        parent::__construct();
        $this->name = "Квадрат";
    }
}

// Демонстрация иерархии
$shapes = [
    new EquilateralTriangle(),
    new Square(),
    new Rectangle(),
    new Parallelogram()
];

echo "Пример:\n\n";

foreach ($shapes as $shape) {
    echo $shape->get_name() . ":\n";
    echo "  - Фигура: " . (($shape instanceof Shape) ? "да" : "нет") . "\n";
    echo "  - Многоугольник: " . (($shape instanceof Polygon) ? "да" : "нет") . "\n";
    
    if ($shape instanceof Polygon) {
        echo "  - Количество сторон: " . $shape->get_sides() . "\n";
    }
    
    if ($shape instanceof Triangle) {
        echo "  - Треугольник: да\n";
    }
    
    if ($shape instanceof Quadrilateral) {
        echo "  - Четырехугольник: да\n";
    }
    
    if ($shape instanceof Rectangle) {
        echo "  - Прямоугольник: да\n";
    }
    
    if ($shape instanceof Square) {
        echo "  - Квадрат: да\n";
    }
    echo "\n";
}

?>
