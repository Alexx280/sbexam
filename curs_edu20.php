<?php
session_start();
include_once 'funk.php';
include_once 'head_edu.tpl';
?>

<!DOCTYPE HTML>
<html>
<div id="edu" >
    <p class="animated flipInX tq"> Контроль знаний </p><br>
    <p class="tf animated bounceInUp delay1">
        Краткое описание правил информационной безопасности завершено.<br>
    Предлагаем Вам проверить свои знания.<br></p>

    <div class="butt1">
        <a href="test.php">
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