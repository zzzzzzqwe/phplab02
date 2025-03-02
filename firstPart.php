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
