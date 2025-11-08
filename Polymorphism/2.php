<?php

class LeftParagraph {
    private $width;
    private $current_line;
    
    public function __construct($width) {
        $this->width = $width;
        $this->current_line = '';
    }
    
    public function add_word($word) {
        if (empty($this->current_line)) {
            $this->current_line = $word;
        } else {
            $new_line = $this->current_line . ' ' . $word;
            if (strlen($new_line) <= $this->width) {
                $this->current_line = $new_line;
            } else {
                echo $this->current_line . "\n";
                $this->current_line = $word;
            }
        }
    }
    
    public function end() {
        if (!empty($this->current_line)) {
            echo $this->current_line . "\n";
            $this->current_line = '';
        }
    }
}

class RightParagraph {
    private $width;
    private $current_line;
    
    public function __construct($width) {
        $this->width = $width;
        $this->current_line = '';
    }
    
    public function add_word($word) {
        if (empty($this->current_line)) {
            $this->current_line = $word;
        } else {
            $new_line = $this->current_line . ' ' . $word;
            if (strlen($new_line) <= $this->width) {
                $this->current_line = $new_line;
            } else {
                echo str_repeat(' ', $this->width - strlen($this->current_line)) . $this->current_line . "\n";
                $this->current_line = $word;
            }
        }
    }
    
    public function end() {
        if (!empty($this->current_line)) {
            echo str_repeat(' ', $this->width - strlen($this->current_line)) . $this->current_line . "\n";
            $this->current_line = '';
        }
    }
}

echo  "Пример" . "\n";
$lp = new LeftParagraph(8);
$lp->add_word('abc');
$lp->add_word('defg');
$lp->add_word('hi');
$lp->add_word('jklmnopq');
$lp->add_word('r');
$lp->add_word('stuv');
$lp->end();
echo "\n";

$rp = new RightParagraph(8);
$rp->add_word('abc');
$rp->add_word('defg');
$rp->add_word('hi');
$rp->add_word('jklmnopq');
$rp->add_word('r');
$rp->add_word('stuv');
$rp->end();

?>
