<?php
session_start();
include_once 'funk.php';
include_once 'head_edu.tpl';
?>

<!DOCTYPE HTML>
<html>
<div id="edu" >
    <p class="animated flipInX tq"> 5. Работа с корпоративной электронной почтой </p><br><img src="pic/post.jpg" class="animated fadeInLeft delay1 leftimg">
    <p class="animated bounceInUp delay1">
    - Корпоративной электронной почтой является почтовая система, включающая почтовые ящики с адресами «...@lama.tomsk.ru».<br>
    - Внешними адресатами являются все адресаты, имеющие адреса отличные от данного адреса.<br>
    - Вся информация, циркулирующая в корпоративной электронной почте, является собственностью организации.<br>
    - Для всех зарегистрированных пользователей корпоративной вычислительной сети предоставляется доступ к
    персональному электронному ящику с адресом вида ...@lama.tomsk.ru.<br>
    - Корпоративная электронная почта должна использоваться сотрудниками только для исполнения должностных обязанностей.<br>
    - Суммарный размер вложений в одном сообщении не должен превышать  20 Мбайт.<br>
    - При отправке контрагентам конфиденциальной информации по электронной почте, ценную информацию следует располагать в прикрепляемом документе,
        который следует
        <input id="it61" class="comment61" type="checkbox" name="it61" value="1" style="display: none"/>
        <label for="it61" style="color: gold">зашифровать</label>, пароль передать другим видом связи.<br>
    - При назначении встреч в календаре по конфиденциальным вопросам следует отмечать что встреча "Частная", для того чтобы информацию о встрече видели только её участники.</p>
    <div class="butt1">
        <a href="curs_edu05.php">
            <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px"> Назад</button>
        </a>
    </div>
    <div class="butt2">
        <a href="curs_edu07.php">
            <button type="button" class="btn btn-success btn-lg btn3d"><span class="glyphicon glyphicon-ok"></span> Вперёд</button>
        </a>
    </div>
    <div class="butt3">
        <a href="index.php">
            <button type="button" class="btn btn-danger btn-lg btn3d" title="Перейти на начальную страницу"><span class="glyphicon glyphicon-remove"></span></button>
        </a>
    </div>
    <div class="progress top-bar" >
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="10" style="width:60%">
            60%
        </div>
    </div>
</div>

</html>