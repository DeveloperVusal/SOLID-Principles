<?php

/**
 * Объект одной мебели
 */
class Furniture extends FurnitureAbstract {
    public $function;

    public function __construct($name, $count, $function)
    {
        $this->obj_name = $name;
        $this->obj_count = $count;
        $this->function = $function;
    }
}