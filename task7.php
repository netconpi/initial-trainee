<?php
echo '<style>body {background: #545032;}</style>';

?>
<p style="width: fit-content; background: #f8000052;font-size: 1.5rem;">
    У нас есть 3 исходных массива (arResultL, arResultN, arResultS), <br>
    с помощю get параметров можно вывести их значения в иготовый результат, <br>
    передайте get параметры где ключ имя массива а значениe ключа индекс элемента. <br>
    <br>
    Выведите последние элементы этих массивов через get параметры
</p>
<?php
    $arResultL = [
        [
            'ITEMS_PROP_6_SORT' => 12,
            'ITEMS_PROP_6_NAME' => 'SIXTH_PROP',
            'ITEMS_PROP_6_TYPE' => 'L',
            'ITEMS_PROP_1_MULTIPLE' => 'Y',
            'ITEMS_PROP_6_VALUE' => [
                '12',
                '22',
                '18'
            ]
        ],
        [
            'ITEMS_PROP_2_SORT' => 22,
            'ITEMS_PROP_2_NAME' => 'SECOND_PROP',
            'ITEMS_PROP_2_TYPE' => 'L',
            'ITEMS_PROP_1_MULTIPLE' => 'Y',
            'ITEMS_PROP_2_VALUE' => [
                12,
                8
            ]
        ],
        [
            'ITEMS_PROP_3_SORT' => 9,
            'ITEMS_PROP_3_NAME' => 'THIRD_PROP',
            'ITEMS_PROP_3_TYPE' => 'L',
            'ITEMS_PROP_1_MULTIPLE' => 'Y',
            'ITEMS_PROP_3_VALUE' => [
                18,
                22,
                4
            ]
        ],
    ];
    $arResultS = [
        [
            'ITEMS_PROP_4_SORT' => 11,
            'ITEMS_PROP_4_NAME' => 'FOURTH_PROP',
            'ITEMS_PROP_4_TYPE' => 'S',
            'ITEMS_PROP_1_MULTIPLE' => 'Y',
            'ITEMS_PROP_4_VALUE' => [
                'value5.1',
                'value5.2'
            ]
        ],
        [
            'ITEMS_PROP_5_SORT' => 15,
            'ITEMS_PROP_5_NAME' => 'FIFTH_PROP',
            'ITEMS_PROP_5_TYPE' => 'S',
            'ITEMS_PROP_1_MULTIPLE' => 'N',
            'ITEMS_PROP_5_VALUE' => 'value5'
        ],
    ];


    $arResultN = [
        [
            'ITEMS_PROP_1_SORT' => 9,
            'ITEMS_PROP_1_NAME' => 'FIRST_PROP',
            'ITEMS_PROP_1_TYPE' => 'N',
            'ITEMS_PROP_1_MULTIPLE' => 'N',
            'ITEMS_PROP_1_VALUE' => 12
        ],
    ];

?>

<div style="background: #ffff0080;width: fit-content;height: 80%;margin: 20px;overflow: scroll;padding: 10px;border: 2px solid;">
<pre>
    $arResultL = [
        [
            'ITEMS_PROP_6_SORT' => 12,
            'ITEMS_PROP_6_NAME' => 'SIXTH_PROP',
            'ITEMS_PROP_6_TYPE' => 'L',
            'ITEMS_PROP_1_MULTIPLE' => 'Y',
            'ITEMS_PROP_6_VALUE' => [
                '12',
                '22',
                '18'
            ]
        ],
        [
            'ITEMS_PROP_2_SORT' => 22,
            'ITEMS_PROP_2_NAME' => 'SECOND_PROP',
            'ITEMS_PROP_2_TYPE' => 'L',
            'ITEMS_PROP_1_MULTIPLE' => 'Y',
            'ITEMS_PROP_2_VALUE' => [
                12,
                8
            ]
        ],
        [
            'ITEMS_PROP_3_SORT' => 9,
            'ITEMS_PROP_3_NAME' => 'THIRD_PROP',
            'ITEMS_PROP_3_TYPE' => 'L',
            'ITEMS_PROP_1_MULTIPLE' => 'Y',
            'ITEMS_PROP_3_VALUE' => [
                18,
                22,
                4
            ]
        ],
    ];
    $arResultS = [
        [
            'ITEMS_PROP_4_SORT' => 11,
            'ITEMS_PROP_4_NAME' => 'FOURTH_PROP',
            'ITEMS_PROP_4_TYPE' => 'S',
            'ITEMS_PROP_1_MULTIPLE' => 'Y',
            'ITEMS_PROP_4_VALUE' => [
                'value5.1',
                'value5.2'
            ]
        ],
        [
            'ITEMS_PROP_5_SORT' => 15,
            'ITEMS_PROP_5_NAME' => 'FIFTH_PROP',
            'ITEMS_PROP_5_TYPE' => 'S',
            'ITEMS_PROP_1_MULTIPLE' => 'N',
            'ITEMS_PROP_5_VALUE' => 'value5'
        ],
    ];


    $arResultN = [
        [
            'ITEMS_PROP_1_SORT' => 9,
            'ITEMS_PROP_1_NAME' => 'FIRST_PROP',
            'ITEMS_PROP_1_TYPE' => 'N',
            'ITEMS_PROP_1_MULTIPLE' => 'N',
            'ITEMS_PROP_1_VALUE' => 12
        ],
    ];
</pre>
</div>

<p style="width: fit-content; background: #f8000052;font-size: 2rem;">Итоговый результат</p>
<?php



?>