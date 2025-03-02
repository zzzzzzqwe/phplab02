# Лабораторная работа №2. Управляющие конструкции

## Студент
**Gachayev Dmitrii I2302**  
**Выполнено 02.03.2025**  

## Цель работы
Освоить использование условных конструкций и циклов в PHP.
## Выполнение работы
## Условные конструкции
### Задача
Необходимо использовать функцию date(), создать таблицу с расписанием на основе текущего дня недели. Реализовал следующим образом 

`firstPart.php:`
```php
<?php
$dayOfWeek = date('N');

$schedule = [
    'John Styles' => [
        'work_days' => [1, 3, 5],
        'hours' => '8:00-12:00'
    ],
    'Jane Doe' => [
        'work_days' => [2, 4, 6],
        'hours' => '12:00-16:00'
    ]
];

echo "<table border='1'";
echo "<tr><th>№</th><th>Фамилия Имя</th><th>График работы</th></tr>";

$index = 1;
foreach ($schedule as $name => $data) {
    echo "<tr>";
    echo "<td>$index</td>";
    echo "<td>$name</td>";
    
    if (in_array($dayOfWeek, $data['work_days'])) {
        echo "<td>{$data['hours']}</td>";
    } else {
        echo "<td>Нерабочий день</td>";
    }
    
    echo "</tr>";
    $index++;
}

echo "</table>";
?>
```
Я определяю текущий день недели с помощью `$dayOfWeek = date('N');`, использую массив `$schedule` для хранения расписания сотрудников, проверяю, является ли день рабочим для сотрудника и заполняю созданную `HTML` таблицу.

Далее запускаю PHP Server и тестирую

case 1:

У обоих сотдруников нерабочий день

![image](screenshots/Screenshot_1.png)


case 2:

У первого сотрудника рабочий день, у второго нерабочий день (включил в рабочие дни John Styles воскресенье)

![image](screenshots/Screenshot_2.png)

Работает корректно.


