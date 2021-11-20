<?php

/**
 * Сотрудник/персонал
 */
class Person extends PersonAbstract {
    
    public function __construct($data = [])
    {
        $this->name = $data['name'];
        $this->surname = $data['surname'];
        $this->age = $data['age'];
        $this->position = $data['position'];

        $this->verify_position();
    }

    protected function verify_position()
    {
        if (!in_array($this->position, $this->positions)) {
            throw new Exception('Нет такой должности');
        }
    }
}