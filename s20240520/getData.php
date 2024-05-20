<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
};

$data = [
    [
        'id' => 1,
        'name' => '珍珠奶茶',
        'pic' => 'pic01.jpg',
        'price' => '100'
    ],
    [
        'id' => 2,
        'name' => '咖啡',
        'pic' => 'pic02.jpg',
        'price' => '150'
    ],
    [
        'id' => 3,
        'name' => '花茶',
        'pic' => 'pic03.jpg',
        'price' => '200'
    ]
];

// dd($data);
echo json_encode($data);
