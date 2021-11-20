<?php

/**
 * Грузчик
 */
class Porter extends Organization {
    public $cargo;
    
    public function __construct($obj)
    {
        $this->cargo = $obj;
    }
}