<?
    if(array_key_exists('rate1', $_GET) && array_key_exists('rate2', $_GET) && array_key_exists('rate3', $_GET) ){
        $rate_1 = $_GET['rate1'];
        $rate_2 = $_GET['rate2'];
        $rate_3 = $_GET['rate3'];

        if(is_numeric($rate_1) && is_numeric($rate_2) && is_numeric($rate_3)){

            if(preg_match('/^([0-9]|1[0])$/', $rate_1) && preg_match('/^([0-9]|1[0])$/', $rate_2) && preg_match('/^([0-9]|1[0])$/', $rate_3)){
                $rate_sum = $rate_1 + $rate_2 + $rate_3;
        
                $rate_total = $rate_sum / 3;
            } else {
                $errors = "Введите целое число от 0 до 10!!!";
            }
            
        } else {
            $errors = "Введите целое число от 0 до 10!!! ";
        } 
        
    }else{
        $errors = "Введите оценку от 0 до 10 !!! ";
    }
?>

<h3>Пожалуйста оцените качевство звонка!</h3>

<form method="GET" action="/example/grade-calculator.php">
    <p>Насколько хорошо вы слышали партнера?</p>
    <input type="text" name="rate1" placeholder="Ввести оценку..."><hr>

    <p>Оцените время ожидания ответа от партнера?</p>
    <input type="text" name="rate2" placeholder="Ввести оценку..."><hr>
    
    <p>Вы остались довольны качеством звонка?</p>
    <input type="text" name="rate3" placeholder="Ввести оценку..."><hr>

    <button>Отправить оценку</button>
</form>

<? if (isset($rate_total)): ?>

    <table border="1" style="text-align:center;">
        <tr>
            <td>Оценка звука</td>
            <td>Оценка время ожидания</td>
            <td>Оценка качевство</td>
            <td style="background: yellow; font-weight:700;">Средная оценка</td>
        </tr>
        <tr>
            <td><?= $rate_1?></td>
            <td><?= $rate_2?></td>
            <td><?= $rate_3?></td>
            <td style="background: yellow; font-weight:700;"><?= number_format( $rate_total, 2, ".", " "); ?></td>
        </tr>

        
    </table>

<? endif ?>

<? if (isset($errors)): ?>

<div>
    <?= $errors?> 
</div>

<? endif ?>
