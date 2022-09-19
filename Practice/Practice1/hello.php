<h2> Project "Hello" php code</h2>
<hr>
<?php 
    echo '<h3>Project example<br></h3>';
    echo '<p>Hello, world!</p>';
?>

<?php
//----------------------------
    echo '<h2?> Переменные - пример </h2>';
    $num1 = 10;
    $num2 = 15;
    $sum = $num1 + $num2;
    echo $num1.' + '.$num2.' = '.$sum;
//----------------------------IF-else
    /*
возраст 12 лет
<12 - ребенок

>12 подросток

*/

    echo '<h2> Пример условия ЕСЛИ - ИНАЧЕ</h2>';
    $name ='Ivan';
    $age=7;
    if($age>12)
        $comment='Подросток';
    elseif($age>=0 && $age<=12)
        $comment ='ребенок';
    else
        $comment='Ошибка ввода';

    echo 'Имя: '.$name .' возраст: '.$age.' лет - '.$comment;

?>
