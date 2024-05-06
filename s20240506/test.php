<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$indexArr = [1, 2, 3, 4, 5];

$studentArr = [
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

$superArr = [
    's1' => [
        'name' => 'amy',
        'mobile' => '0911',
    ],
    's2' => [
        'name' => 'bob',
        'mobile' => '0922',
    ],
    's3' => [
        'name' => 'cat',
        'mobile' => '0933',
    ]
];

// dd($studentArr);
dd($superArr);
// dd($assArr);
// dd($assArr['day1']['desc']);
// dd($assArr['day1']['skills']['skill1']);
// dd($assArr['day2']);
// dd($assArr['day3']);

// 5 , monthArr = [1,2,3,4,5..., 31]
// restArr = [5/2,5/8]

// foreach monthArr
// if monthArr Value , 存在restArr ?
?>

<!-- html -->

<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>HTML Table</h2>

    <table>
        <tr>
            <th>sn.</th>
            <th>name</th>
            <th>mobile</th>
        </tr>
        <?php foreach ($superArr as $key => $value) : ?>
            <tr>
                <td>
                    <?= $key; ?>
                </td>
                <td>
                    <?= $value['name']; ?>
                </td>
                <td>
                    <?= $value['mobile']; ?>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>