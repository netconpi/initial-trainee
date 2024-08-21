<?php
    echo '<style>body {background: #545032;}</style>';

    $keyProp = [
        'PROP_1',
        'PROP_3',
        'PROP_4'
    ];
?>


<p style="width: fit-content; background: #f8000052;font-size: 1.5rem;">
    Удалите из массива лишние элементы. <br>
    У нас есть массив с ключами keyProp, <br> 
    нужно сформировать массив из элементов массива <br>
    arResult в поле которых встречаються ключи из массива keyProp
</p>
<div style="background: #ffff0080; width: fit-content; overflow: scroll; padding: 10px; border: 2px solid;">

    <pre>
        $keyProp = [
            'PROP_1',
            'PROP_3',
            'PROP_4'
        ];

        $arResult = [
            [
                'ITEMS_PROP_1_SORT' => 9,
                'ITEMS_PROP_1_NAME' => 'FIRST_PROP',
                'ITEMS_PROP_1_TYPE' => 'N',
                'ITEMS_PROP_1_MULTIPLE' => 'N',
                'ITEMS_PROP_1_VALUE' => 12
            ],
            [
                'ITEMS_PROP_2_SORT' => 22,
                'ITEMS_PROP_2_NAME' => 'SECOND_PROP',
                'ITEMS_PROP_2_TYPE' => 'L',
                'ITEMS_PROP_1_MULTIPLE' => 'Y',
                'ITEMS_PROP_2_VALUE' => [
                    12, 8
                ]
            ],
            [
                'ITEMS_PROP_3_SORT' => 9,
                'ITEMS_PROP_3_NAME' => 'THIRD_PROP',
                'ITEMS_PROP_3_TYPE' => 'L',
                'ITEMS_PROP_1_MULTIPLE' => 'Y',
                'ITEMS_PROP_3_VALUE' => [
                    18, 22, 4
                ]
            ],
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
            [
                'ITEMS_PROP_6_SORT' => 12,
                'ITEMS_PROP_6_NAME' => 'SIXTH_PROP',
                'ITEMS_PROP_6_TYPE' => 'L',
                'ITEMS_PROP_1_MULTIPLE' => 'Y',
                'ITEMS_PROP_6_VALUE' => [
                    '12', '22', '18'
                ]
            ],
        ];
    </pre>
</div>

<?php
    $arResult = [
        [
            'ITEMS_PROP_1_SORT' => 9,
            'ITEMS_PROP_1_NAME' => 'FIRST_PROP',
            'ITEMS_PROP_1_TYPE' => 'N',
            'ITEMS_PROP_1_MULTIPLE' => 'N',
            'ITEMS_PROP_1_VALUE' => 12
        ],
        [
            'ITEMS_PROP_2_SORT' => 22,
            'ITEMS_PROP_2_NAME' => 'SECOND_PROP',
            'ITEMS_PROP_2_TYPE' => 'L',
            'ITEMS_PROP_1_MULTIPLE' => 'Y',
            'ITEMS_PROP_2_VALUE' => [
                12, 8
            ]
        ],
        [
            'ITEMS_PROP_3_SORT' => 9,
            'ITEMS_PROP_3_NAME' => 'THIRD_PROP',
            'ITEMS_PROP_3_TYPE' => 'L',
            'ITEMS_PROP_1_MULTIPLE' => 'Y',
            'ITEMS_PROP_3_VALUE' => [
                18, 22, 4
            ]
        ],
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
        [
            'ITEMS_PROP_6_SORT' => 12,
            'ITEMS_PROP_6_NAME' => 'SIXTH_PROP',
            'ITEMS_PROP_6_TYPE' => 'L',
            'ITEMS_PROP_1_MULTIPLE' => 'Y',
            'ITEMS_PROP_6_VALUE' => [
                '12', '22', '18'
            ]
        ],
    ];
?>

<?php

?>
<p style="width: fit-content; background: #f8000052;font-size: 2rem;">Итоговый результат:</p>
<div style="background: #ffff0080;width: fit-content;height: 80%;margin: 20px;overflow: scroll;padding: 10px;border: 2px solid;">
    <?php
        
    ?>
</div>
