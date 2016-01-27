<?php
session_start();
include_once 'funk.php';
include_once 'head_edu.tpl';
?>
<!DOCTYPE HTML>
<html>
<div id="edu" >
    <p class="animated flipInX tq"> 2. Предоставление доступа к ресурсам корпоративной сети.</p><br>
    <img src="pic/z_its.jpg" class="animated fadeInLeft leftimg delay1" >
    <p class="animated bounceInUp delay1">
        Доступ пользователя к ресурсам сети (папки на сервере, интернет, программное обеспечение, флэш-карты и т.п.)
        и средствам вычислительной техники на рабочем месте предоставляется на основе заявки <br> в
        <input id="it1" class="comment" type="checkbox" name="it1" value="1" style="display: none"/>
        <label for="it1" style="color: gold">Итилиуме</label>
        от начальника структурного подразделения. От других лиц заявки не рассматриваются.<br>
        Все сотрудники работающие с компьютером, перед началом работы должны быть ознакомлены с локальной нормативной
        документацией по обеспечению информационной безопасности.<br>

        Те, кто уже работает некоторое время, и хочет получить дополнительный доступ к
        <input id="res" class="comment3" type="checkbox" name="res" value="1" style="display: none"/>
        <label for="res" style="color: gold">любым ресурсам </label>,
        могут самостоятельно сформировать заявку в Итилиуме, которая будет выполнена после согласования
        с руководителем сотрудника, написавшего заявку, и по необходимости со Службой безопасности.<br>
        По вопросам работы компьютерной техники и программого обеспечения также необходимо использовать эту систему обращений.
    <!--<img src="pic/z_itil.jpg" class="leftimg"></p>-->


    <div class="butt1">
        <a href="curs_edu01.php">
            <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px"> Назад</button>
        </a>
    </div>
    <div class="butt2">
        <a href="curs_edu03.php">
            <button type="button" class="btn btn-success btn-lg btn3d"><span class="glyphicon glyphicon-ok"></span> Вперёд</button>
        </a>
    </div>
    <div class="butt3">
        <a href="index.php">
            <button type="button" class="btn btn-danger btn-lg btn3d" title="Перейти на начальную страницу"><span class="glyphicon glyphicon-remove"></span></button>
        </a>
    </div>
    <div class="progress top-bar" >
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="10" style="width:20%">
            20%
        </div>
    </div>
</div>

</html>
