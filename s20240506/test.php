<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$indexArr = [1, 2, 3, 4, 5];

$assArr = [
    's1' => 'amy',
    's2' => 'bob',
    's3' => 'cat'
];

$assArr = [
    'day1' => [
        'date' => "5/6",
        'rest' => true,
        'desc' => "test 12345",
        'skills' => [
            'skill1' => 'PHP',
            'skill2' => 'HTML'
        ]
    ],
    'day2' => 'bob',
    'day3' => 'cat'
];

dd($indexArr);
dd($assArr);
dd($assArr['day1']['desc']);
dd($assArr['day1']['skills']['skill1']);
dd($assArr['day2']);
dd($assArr['day3']);

// 5 , monthArr = [1,2,3,4,5..., 31]
// restArr = [5/2,5/8]

// foreach monthArr
   // if monthArr Value , 存在restArr ?
