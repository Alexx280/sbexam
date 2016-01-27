<?php
session_start();
include_once 'funk.php';
include_once 'head_edu.tpl';
?>

<!DOCTYPE HTML>
<html>
<div id="edu" >
    <p class="animated flipInX tq">  3. Работа в корпоративной информационной сети </p><br>

    <p class="animated bounceInUp delay1">Работа в корпоративной сети Организации сотрудникам разрешена на компьютерах
    указанных руководителем, только со своей учетной записью пользователя и паролем.
    Исключение составляют сотрудники ИТ-службы, которым вследствие выполнения своих прямых обязанностей
    необходим доступ одновременно к нескольким компьютерам.</p>
    <img src="pic/cad.png" class="animated fadeInLeft leftimg1 delay1" >
    <p class="animated bounceInUp delay1">Пользователи, уходя со своего рабочего места, должны блокировать доступ к своему рабочему компьютеру
    (сочетание клавиш «CTRL+ALT+DEL» и выбрать «Заблокировать компьютер», либо достаточно  нажать клавиши “Windows” + L).</p>

        <img src="pic/connect.jpg" class="animated fadeInRightBig rightimg" id="pic11">
    <p class="animated bounceInUp delay1">
    При печати документов на сетевой общий принтер, распечатанные листы следует забирать незамедлительно, сразу после отправки на печать.
    Запрещается:<br>
    - самостоятельно подключать компьютер (в том числе мобильный) к сети с любого рабочего места;<br>
    - самостоятельно вскрывать любые
        <input id="it1" class="comment2" type="checkbox" name="it1" value="1" style="display: none"/>
        <label for="it1" style="color: gold">технические средства</label>
         (кроме сотрудников ИТ-службы).<br>
    - выключать программу удалённого подключения:
        <img src="pic/Netop2.jpg" class="animated fadeInLeft rightimg1 delay1" ><br>


    </p><br>

    <br><br><br><br>

    <div class="butt1">
        <a href="curs_edu02.php">
            <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px"> Назад</button>
        </a>
    </div>
    <div class="butt2">
        <a href="curs_edu04.php">
            <button type="button" class="btn btn-success btn-lg btn3d"><span class="glyphicon glyphicon-ok"></span> Вперёд</button>
        </a>
    </div>
    <div class="butt3">
        <a href="index.php">
            <button type="button" class="btn btn-danger btn-lg btn3d" title="Перейти на начальную страницу"><span class="glyphicon glyphicon-remove"></span></button>
        </a>
    </div>
    <div class="progress top-bar" >
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="10" style="width:30%">
            30%
        </div>
    </div>
</div>

</html>