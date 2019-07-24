<?php
$users = [
    "Андрей" => 13,
    "Семен" => 10,
    "Виталий" => 94,
    "Александр" => 88,
    "Анатолий" => 132
];

$city = [
    "Москва" =>
        [
            [
                'ID' => 13,
                'POSESHENIYA' => 3
            ],
            [
                'ID' => 94,
                'POSESHENIYA' => 2
            ],
            [
                'ID' => 132,
                'POSESHENIYA' => 6
            ]
        ],
    "Санкт-Петербург" => [
        [
            'ID' => 88,
            'POSESHENIYA' => 1
        ],
        [
            'ID' => 94,
            'POSESHENIYA' => 7
        ],
        [
            'ID' => 10,
            'POSESHENIYA' => 9
        ]
    ],
];


function getVisit($userId, $city){
    $res = [];
    foreach ($city as $ParentKey => $ParentValue) {
        foreach ($ParentValue as $ChildKey =>$ChildValue ) {
            if ($userId == $ChildValue["ID"]){
                $res += [$ParentKey => $ChildValue["POSESHENIYA"]];
            }
        }
    };
    return $res;
}

$result =[];
foreach ($users as $key => $userId){
    $result[$userId]["CITIES"] = getVisit($userId, $city);
    $result[$userId]["FIO"] = $key;
}