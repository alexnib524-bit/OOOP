<?php

class Acellularia {
    // Бесклеточные 
}

class Cellularia {
    // Клеточные
}

class Prokaryota extends Cellularia {
    // Прокариоты
}

class Eukaryota extends Cellularia {
    // Эукариоты
}

class Unicellularia extends Eukaryota {
    // Одноклеточные
}

class Fungi extends Eukaryota {
    // Грибы
}

class Plantae extends Eukaryota {
    // Растения
}

class Animalia extends Eukaryota {
    // Животные
}

//  Пример использования
$virus = new Acellularia();
$bacteria = new Prokaryota();
$animal = new Animalia();
$plant = new Plantae();
$fungi = new Fungi();
$unicellular = new Unicellularia();

echo  "Проверка наследования" . "\n";
echo "Вирус является бесклеточным: " . (($virus instanceof Acellularia) ? "да" : "нет") . "\n";
echo "Бактерия является клеточной: " . (($bacteria instanceof Cellularia) ? "да" : "нет") . "\n";
echo "Бактерия является прокариотом: " . (($bacteria instanceof Prokaryota) ? "да" : "нет") . "\n";
echo "Животное является эукариотом: " . (($animal instanceof Eukaryota) ? "да" : "нет") . "\n";
echo "Животное является клеточным: " . (($animal instanceof Cellularia) ? "да" : "нет") . "\n";
echo "Растение является эукариотом: " . (($plant instanceof Eukaryota) ? "да" : "нет") . "\n";
echo "Гриб является эукариотом: " . (($fungi instanceof Eukaryota) ? "да" : "нет") . "\n";
echo "Одноклеточное является эукариотом: " . (($unicellular instanceof Eukaryota) ? "да" : "нет") . "\n";

?>
