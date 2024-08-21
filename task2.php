<?php
    echo '<style>body {background: #545032;}</style>';
    $arrNumber = [];
?>
<div style="width: fit-content; background: #f8000052;font-size: 1.5rem;">
    Сформируйте массив чисел
    <pre>
    $arrNumber = [];
    for ($i = 0; $i < 15; $i++) {
        $arrNumber[] = rand();
    }
    </pre>
    Сделайте вывод чисел где кол-во символов равно 10 и это значение четное
</div>
    

<?php
    for ($i = 0; $i < 15; $i++) {
        $arrNumber[] = rand();
    }
?>

<p style="width: fit-content; background: #f8000052;font-size: 2rem;">Итоговый результат:</p>
<div style="background: #ffff0080; width: fit-content; margin: 20px; overflow: scroll; padding: 10px; border: 2px solid;">
    <?php 
        
    ?>
</div>
