<?php
session_start();
include_once 'funk.php';
include_once 'head_edu.tpl';
?>

<!DOCTYPE HTML>
<html>
<div id="edu" >
    <p class="animated flipInX tq"> 6. Использование Интернет </p><br> <img src="pic/game.jpg" class="animated fadeInRightBig rightimg delay1">
    <p class="animated bounceInUp delay1">
    Интернет следует использовать только в рабочих целях.<br>

    Запрещается:<br>
    -	использовать Интернет для хранения коммерческой тайны и конфиденциальной информации;<br>
    -	использовать личную почту на бесплатных сайтах для пересылки рабочей информации без разрешения руководителя;<br>
    -	распространять программное обеспечение, файлы, сообщения, содержащие вредоносные коды;<br>
    -	загружать и устанавливать на рабочем месте программное обеспечение;<br>
    -   загружать файлы не предназначенные для работы (музыку, видео);<br>
    -   прослушивать интернет радио;<br>
    -	передавать другому сотруднику, вне зависимости от наличия у него прав доступа, право работы в сети Интернет
    со своего компьютера, без согласования с непосредственным руководителем<br>
        <br>
    Передавать конфиденциальную информацию через интернет можно только по указанию руководителя, с использованием шифрования,
    аналогично передаче по электронной почте.
    </p>


    <br>
    <div class="butt1">
        <a href="curs_edu07.php">
            <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px"> Назад</button>
        </a>
    </div>
    <div class="butt2">
        <a href="curs_edu09.php">
            <button type="button" class="btn btn-success btn-lg btn3d"><span class="glyphicon glyphicon-ok"></span> Вперёд</button>
        </a>
    </div>
    <div class="butt3">
        <a href="index.php">
            <button type="button" class="btn btn-danger btn-lg btn3d" title="Перейти на начальную страницу"><span class="glyphicon glyphicon-remove"></span></button>
        </a>
    </div>
    <div class="progress top-bar" >
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="10" style="width:80%">
            80%
        </div>
    </div>
</div>

</html>