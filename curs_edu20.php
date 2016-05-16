<?php
session_start();
include_once 'funk.php';
include_once 'head_edu.tpl';
if ($_SESSION['lama_id'] != '') {
    $file = '1.php';}
else {$file = 'test.php';};
?>

<!DOCTYPE HTML>
<html>
<div id="edu" >
    <p class="animated flipInX tq"> Контроль знаний </p><br>
    <p class="tf animated bounceInUp delay1">
        Краткое описание правил информационной безопасности завершено.<br>
        Проверте свои знания.<br>
        Для успешной сдачи зачёта необходимо ответить  <br>правильно минимум на 7 из 10 вопросов.<br>
        В каждом вопросе может быть несколько ответов.<br>
        Вернуться на предыдущитй вопрос будет невозможно.<br>
        На каждый вопроc выделено по 2 минуты<br>
        <br><br></p>

    <div class="butt1">
        <a href="<?php echo $file?> ">
            <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px"> Тест </button>
        </a>
    </div>
    <div class="butt2">
        <a href="curs_edu01.php">
            <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px">Ещё раз</button>
        </a>
    </div>

</div>

</html>