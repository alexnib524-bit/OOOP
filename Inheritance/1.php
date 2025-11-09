<?php

class BaseObject {
    protected $x;
    protected $y;
    protected $z;
    
    public function __construct($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    
    public function get_coordinates() {
        return [$this->x, $this->y, $this->z];
    }
}

class Block extends BaseObject {
    public function shatter() {
        $this->x = null;
        $this->y = null;
        $this->z = null;
    }
}

class Entity extends BaseObject {
    public function move($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}

class Thing extends BaseObject {
    
}

echo  "Пример" . "\n";
$block = new Block(10, 20, 30);
echo "Block coordinates: ";
print_r($block->get_coordinates());
echo "\n";

$block->shatter();
echo "After shatter: ";
print_r($block->get_coordinates());
echo "\n";

$entity = new Entity(5, 15, 25);
echo "Entity coordinates: ";
print_r($entity->get_coordinates());
echo "\n";

$entity->move(100, 200, 300);
echo "After move: ";
print_r($entity->get_coordinates());
echo "\n";

$thing = new Thing(1, 2, 3);
echo "Thing coordinates: ";
print_r($thing->get_coordinates());
echo "\n";

?>
