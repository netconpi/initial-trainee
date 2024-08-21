<?php
    echo '<style>body {background: #545032;}</style>';

?>
<p style="width: fit-content; background: #f8000052;font-size: 2rem;">
    Распределить элементы по подмассивам, согластно его значению в поле  ITEMS_PROP_*_TYPE
</p>
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

<div style="background: #ffff0080;width: fit-content;height: 80%;margin: 20px;overflow: scroll;padding: 10px;border: 2px solid;">
    <pre>
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
            'ITEMS_PROP_2_MULTIPLE' => 'Y',
            'ITEMS_PROP_2_VALUE' => [
                12, 8
            ]
        ],
        [
            'ITEMS_PROP_3_SORT' => 9,
            'ITEMS_PROP_3_NAME' => 'THIRD_PROP',
            'ITEMS_PROP_3_TYPE' => 'L',
            'ITEMS_PROP_3_MULTIPLE' => 'Y',
            'ITEMS_PROP_3_VALUE' => [
                18, 22, 4
            ]
        ],
        [
            'ITEMS_PROP_4_SORT' => 11,
            'ITEMS_PROP_4_NAME' => 'FOURTH_PROP',
            'ITEMS_PROP_4_TYPE' => 'S',
            'ITEMS_PROP_4_MULTIPLE' => 'Y',
            'ITEMS_PROP_4_VALUE' => [
                'value5.1',
                'value5.2'
            ]
        ],
        [
            'ITEMS_PROP_5_SORT' => 15,
            'ITEMS_PROP_5_NAME' => 'FIFTH_PROP',
            'ITEMS_PROP_5_TYPE' => 'S',
            'ITEMS_PROP_5_MULTIPLE' => 'N',
            'ITEMS_PROP_5_VALUE' => 'value5'
        ],
        [
            'ITEMS_PROP_6_SORT' => 12,
            'ITEMS_PROP_6_NAME' => 'SIXTH_PROP',
            'ITEMS_PROP_6_TYPE' => 'L',
            'ITEMS_PROP_6_MULTIPLE' => 'Y',
            'ITEMS_PROP_6_VALUE' => [
                '12', '22', '18'
            ]
        ],
    ];
    </pre>
</div>
<?php


?>
<p style="width: fit-content; background: #f8000052;font-size: 2rem;">Итоговый результат:</p>
<div style="background: #ffff0080;width: fit-content;height: 80%;margin: 20px;overflow: scroll;padding: 10px;border: 2px solid;">
    готовый массив
    <?php
        
    ?>
</div>
