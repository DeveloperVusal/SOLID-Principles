<?php

// Мебели
abstract class Furniture {
    public $obj_name;
    public $obj_count;
}


// Объект мебели
class ObjectFurniture extends Furniture {
    public $function;

    public function __construct($name, $count, $function)
    {
        $this->obj_name = $name;
        $this->obj_count = $count;
        $this->function = $function;
    }
}

// Команата
class Room {
    public $purpose; // Назначение
    public $element = []; // Элемент в комнате (мебель/человек)

    public function __construct($purpose, $obj = [])
    {
        foreach ($obj as $key => $val) $this->element[] = $val;
    }

    public function print_detail()
    {
        foreach ($this->element as $key => $val) {
            print_r($val);
            echo "<br>";
        }
    }
}


class Organization {
    public $name = 'Грузовичкофф';
}

// Грузчик
class Porter extends Organization {
    public $cargo;
    
    public function __construct($obj)
    {
        $this->cargo = $obj;
    }
}

class Persons {
    
}


$room_1 = new Room('Офис',[
    new Porter(new ObjectFurniture('стол', 5, 'офисный стол')),
    new Porter(new ObjectFurniture('стул', 1, 'офисный стул'))
]);
$room_1->print_detail();
// $obj = new Furniture();
// $obj->hello();