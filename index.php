<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework for Lesson 9</title>
    <style>
        body {
            max-width: 800;
        }
    </style>
</head>

<body>

    <h5>Заняття 9. Початкові значення властивостей при оголошенні та інше </h5>
    <hr>

    <?php

    require_once __DIR__ . '/vendor/autoload.php';

    echo "<pre>",
    "
    1.	Реалізуйте клас Arr, схожий на той, що я реалізував вище. На відміну від мого класу, метод add вашого класу параметр повинен приймати масив чисел. 
    Усі числа з цього масиву повинні додаватися до кінця масиву.
    2.	Реалізуйте також метод getAvg, який знаходитиме середнє арифметичне чисел.
        ",
    "</pre>";


    $array = [3, 5, 7, 9, 11];
    $newArr = new Arr();
    $newArr->add($array);
    print_r($newArr->getNumbers());
    echo "<br />";
    //foreach ($newArr->numbers as $number)
    echo "Cума чисел масива " . $newArr->getSum() . "<br />";
    echo "Cереднє арифметичне чисел масива " . $newArr->getAvg() . "<br />";


    echo "<hr />";

    echo "<pre>",
    "
    3.	Зробіть клас City, у якому будуть такі властивості - name, foundation (дата основи), population (населення). Створити об'єкт цього класу.
    4.	Нехай дана змінна $ props, у якій зберігається масив назв властивостей класу City.
    Переберіть цей масив циклом foreach і виведіть на екран значення відповідних властивостей.
    ",
    "</pre>";

    $newCity = new City();
    $newCity->setName("Kyiv");
    $newCity->setFoundation(430);
    $newCity->setPopulation(2500000);
    echo $newCity->getInfo();
    $props = ["name", "foundation", "population"];
    foreach ($props as $item) {
        $prop = ucfirst($item);
        echo $newCity->{"get{$prop}"}() . "<br />";
    }

    echo "<hr />";

    echo "<pre>",
    "
    5.	Скопіюйте мій код класу User та масив $ props. У моєму прикладі на екран виводиться ім'я користувача. Виведіть ще й ім'я та по батькові.
    6.	Нехай масив $ methods буде асоціативним із ключами method1 і method2:
        $ methods = ['method1' => 'getName', 'method2' => 'getAge'];
    Виведіть ім'я та вік користувача за допомогою цього масиву.
    ",
    "</pre>";

    $newUser = new User("Mike", 37);
    echo $newUser->getInfo();
    $methods = ['method1' => 'getName', 'method2' => 'getAge'];
    echo $newUser->{$methods['method1']}() . "<br />";
    echo $newUser->{$methods['method2']}() . "<br />";

    echo "<hr />";

    ?>


</body>

</html>