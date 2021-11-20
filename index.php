<?php
include './vendor/autoload.php';

$room_1 = new Room('Офис', [
    new Furniture('стол', 2, 'офисный стол'),
    new Furniture('стул', 4, 'офисный стул')
]);

$person1 = new Person([
    'name' => 'Vusal',
    'surname' => 'Mamedov',
    'age' => '25',
    'position' => 'Гость',
]);


$furniture1 = new Furniture('диван', 5, 'диван для гостей');
$furniture2 = new Furniture('светильник', 5, 'светильник для работы');

$porter_1 = new Porter($furniture1);
$porter_2 = new Porter($furniture2);

$room_1->append([
    $porter_1,
    $porter_2
]);

echo '<pre>';
print_r($room_1);
echo '</pre>';