<?php
session_start();
include_once 'funk.php';
include_once 'head_edu.tpl';
?>
<!DOCTYPE HTML>
<html>
<div id="edu" >
    <p class="animated flipInX tq"> 8. Ответственность </p><br>
    <p class="animated bounceInUp delay1">
        Для всех сотрудников в компании применяется дисциплинарная ответственность за не соблюдение требований информационной безопасности(замечание, выговор, увольнение)
    , а также начисляются штрафные баллы.<br>
    При накоплении 100 баллов проводится индивидуальное собеседование со службой безопасности и депремирование.
    Подробные виды нарушений и количество баллов перечислены в <a href="education/06.dot" style="color: lightskyblue"> "Положении об ответственности
    сотрудников Группы компаний «Лама» по инцидентам нарушения информационной безопасности"</a>, также документ можно найти в папке:
        \Info\Документы ИБ
        <br><br>
    Вместе с тем, существует Уголовная ответственность за:<br>
    - Незаконное получение и разглашение сведений, составляющих коммерческую тайну (Ст. 183 УК РФ);<br>
    - Неправомерный доступ к компьютерной информации (Ст. 272 УК РФ);<br>
    - Создание, использование и распространение вредоносных программ для ЭВМ (Ст. 273 УК РФ);<br><br>
    Административная ответственность за:<br>
    - Нарушение установленного законом порядка сбора, хранения, использования или распространения информации о гражданах (персональных данных)(Статья 13.11 КоАП);<br>
    - Разглашение информации с ограниченным доступом (Статья 13.14 КоАП).</p>

    <div class="butt1">
        <a href="curs_edu09.php">
            <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px"> Назад</button>
        </a>
    </div>
    <div class="butt2">
        <a href="curs_edu20.php">
            <button type="button" class="btn btn-success btn-lg btn3d"><span class="glyphicon glyphicon-ok"></span> Вперёд</button>
        </a>
    </div>
    <div class="butt3">
        <a href="index.php">
            <button type="button" class="btn btn-danger btn-lg btn3d" title="Перейти на начальную страницу"><span class="glyphicon glyphicon-remove"></span></button>
        </a>
    </div>
    <div class="progress top-bar" >
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="10" style="width:100%">
            100%
        </div>
    </div>
</div>

</html>