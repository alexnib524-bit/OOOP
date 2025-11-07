<?php
class LittleBell {
    public function sound() {
        echo "ding\n";
    }
}
$bell = new LittleBell();
$bell->sound();
$bell->sound();
$bell->sound();
?>
