<?php
$students = [
    [
        "name" => "Hasan",
        "roll" => 773907,
        "guardian" => "ABC",
        "phone" => 235
    ],
    [
        "name" => "AA",
        "roll" => 773907,
        "guardian" => "ABC",
        "phone" => 235
    ],
    [
        "name" => "BB",
        "roll" => 773907,
        "guardian" => "ABC",
        "phone" => 235
    ]
];

foreach($students as $student){
    echo $student['name'].PHP_EOL;
}