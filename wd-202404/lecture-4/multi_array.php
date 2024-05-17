<?php

// $data = [
//     array(1,2),
//     1,
//     array(3,4)
// ];
// $data[0][1] = 5;
// echo $data[0][1].PHP_EOL;
// print_r($data);

// $students = ["Hasan"];

// $students[] = "Shuvo";

$singleStudent = [
    "name" => "Hasan",
    "roll" => 773907,
    "guardian" => "ABC",
    "phone" => 235
];

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

$student = $students[1];
print_r($student);
print_r($students);