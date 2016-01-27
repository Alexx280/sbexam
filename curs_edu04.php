<?php
session_start();
include_once 'funk.php';
include_once 'head_edu.tpl';
?>

<!DOCTYPE HTML>
<html>
<div id="edu" >
    <p class="animated bounceInUp">Запрещается: </p><img src="pic/rem_comp3.jpg" class="animated fadeInRightBig rightimg" >
    <p class="animated bounceInUp">
    - сообщать
        <input id="it41" class="comment4" type="checkbox" name="it41" value="1" style="display: none"/>
        <label for="it41" style="color: gold">посторонним лицам</label>
        информацию о структуре сети, сетевых адресах и именах;<br>
    - самостоятельно редактировать реестр операционной системы, отключать антивирусную защиту,
    изменять права доступа к локальным ресурсам своего компьютера и настройки сети, устанавливать какие-либо
    программные и технические средства (в т.ч. телефоны и флэш карты);</p>  <img src="pic/usb2.jpg" class="animated fadeInRightBig rightimg" >
    <p class="animated bounceInUp">
    - оставлять свою включенную рабочую станцию без контроля и допускать к ней посторонних лиц.<br>
    - использовать массовую рассылку в программе обмена мнгновенными сообщениями ("Lynk" / "Skype для бизнеса") для передачи конфиденциальной
    информации и распространения
        <input id="it42" class="comment42" type="checkbox" name="it42" value="1" style="display: none"/>
        <label for="it42" style="color: gold">личных объявлений</label>
        ;<br>
    - копировать и перемещать файлы с конфиденциальной информацией и коммерческой тайной с их изначального
    места положения без согласования с вышестоящим руководителем;<br>
    - удалять файлы других пользователей на серверах общего пользования;<br>
    - хранить на сервере не рабочую информацию; <br>
    - запускать программы (приложения) не предусмотренные должностными обязаностями;<br>
    - работать на компьютере от имени другого пользователя;<br>
    - использовать для работы личную электронную почту.</p>

    <div class="butt1">
        <a href="curs_edu03.php">
            <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px"> Назад</button>
        </a>
    </div>
    <div class="butt2">
        <a href="curs_edu05.php">
            <button type="button" class="btn btn-success btn-lg btn3d"><span class="glyphicon glyphicon-ok"></span> Вперёд</button>
        </a>
    </div>
    <div class="butt3">
        <a href="index.php">
            <button type="button" class="btn btn-danger btn-lg btn3d" title="Перейти на начальную страницу"><span class="glyphicon glyphicon-remove"></span></button>
        </a>
    </div>
    <div class="progress top-bar" >
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="10" style="width:40%">
            40%
        </div>
    </div>
</div>

</html>