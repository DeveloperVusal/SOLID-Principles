<?php

abstract class PersonAbstract {
    public $name;
    public $surname;
    public $age;
    public $position;
    protected $positions = [
        'Гость',
        'Сотрудник',
        'Генеральный директор'
    ];

    abstract protected function verify_position();
}