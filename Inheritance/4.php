<?php

class User {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function send_message($user, $message) {
        
    }
    
    public function post($message) {
        
    }
    
    public function info() {
        return "";
    }
    
    public function describe() {
        $info = $this->info();
        if ($info) {
            return $this->name . "\n" . $info;
        } else {
            return $this->name;
        }
    }
}

class Person extends User {
    private $birth_date;
    
    public function __construct($name, $birth_date) {
        parent::__construct($name);
        $this->birth_date = $birth_date;
    }
    
    public function info() {
        return "Дата рождения: " . $this->birth_date;
    }
    
    public function subscribe($user) {
        
    }
}

class Community extends User {
    private $description;
    
    public function __construct($name, $description) {
        parent::__construct($name);
        $this->description = $description;
    }
    
    public function info() {
        return "Описание: " . $this->description;
    }
}

// Пример 
$person1 = new Person("Иван Иванов", "1990-05-15");
$person2 = new Person("Мария Петрова", "1985-12-03");
$community = new Community("Программисты PHP", "Сообщество для обсуждения PHP");

echo $person1->describe() . "\n\n";
echo $person2->describe() . "\n\n";
echo $community->describe() . "\n\n";

?>
