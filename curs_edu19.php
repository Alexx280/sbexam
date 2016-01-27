<?php
session_start();
include_once 'funk.php';
include_once 'head_edu.tpl';
?>

    <!DOCTYPE HTML>
    <html>
    <div id="edu" >
        <p class="animated flipInX tq"> Комментарий </p><br>
        <p class="animated bounceInUp delay1">

            В тексте инструкции есть слова выделенные цветом:<br>
            - при нажатии на жёлтый текст вы сможете увидеть дополнительную информацию,
            для закрытия окна пояснения следует нажать на него ещё раз.<br>
            - при нажатии на голубой текст вы загрузите документ в полном его содержании. <br><br>
            Текста данной инструкции достаточно для ответов на вопросы теста.<br>
            Кнопка: <a href="index.php">
                <button type="button" class="btn btn-danger btn-lg btn3d"><span class="glyphicon glyphicon-remove"></span></button>
            </a>
            закроет инструции и покажет начальное окно. <br>
        </p>

        <div class="butt1">
            <a href="index.php">
                <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px"> Главная </button>
            </a>
        </div>
        <div class="butt2">
            <a href="curs_edu01.php">
                <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px">Вперёд</button>
            </a>
        </div>

    </div>
    </html>


<?php
/**
 * Created by PhpStorm.
 * User: busygin
 * Date: 14.10.2015
 * Time: 9:42
 */