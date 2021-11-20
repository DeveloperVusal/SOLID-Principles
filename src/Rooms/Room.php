<?php

/**
 * Комната
 */
class Room {
    public $purpose; // Назначение
    public $elements = []; // Элементы в комнате (мебель/человек)

    public function __construct($purpose, $obj = [])
    {
        $this->purpose = $purpose;

        foreach ($obj as $val) $this->elements[] = $val;
    }

    public function append($obj = [])
    {
        foreach ($obj as $val) $this->elements[] = $val;
    }

    public function print_detail()
    {
        foreach ($this->elements as $val) {
            echo '<pre>';
            print_r($val);
            echo '</pre>';
        }
    }
}