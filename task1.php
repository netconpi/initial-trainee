<?php
    echo '<style>body {background: #545032;}</style>';
?>
<div style="width: fit-content; background: #f8000052;font-size: 1.5rem;">
    Сформируйте массив чисел
    <pre>
        $arrNumber = [];
        for ($i = 0; $i < 15; $i++) {
            $arrNumber[] = rand();
        }
    </pre>
    Сделайте вывод четных чисел из массива arrNumber
</div>
<?php
    for ($i = 0; $i < 15; $i++) {
        $arrNumber[] = rand();
    }
?>

<p style="width: fit-content; background: #f8000052;font-size: 2rem;">Итоговый результат:</p>
<div style="background: #ffff0080;width: fit-content;margin: 10px;overflow: scroll;padding: 10px 50px;border: 2px solid;">
    <?php 
        
    ?>
</div>