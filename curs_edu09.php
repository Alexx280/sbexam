<?php
session_start();
include_once 'funk.php';
include_once 'head_edu.tpl';
?>

<!DOCTYPE HTML>
<html>
<div id="edu" >
    <p class="animated flipInX tq"> 7. Коммерческая тайна </p></br>
    <p class="animated bounceInUp delay1">
        <!--Коммерческая тайна - это конфиденциальность информации, позволяющая ее обладателю при существующих или возможных
    обстоятельствах увеличить доходы, избежать неоправданных расходов, сохранить положение на рынке товаров, работ,
    услуг или получить иную коммерческую выгоду.<br>-->
    Перечень информации, составляющей коммерческую тайну в компании, определён в <a href="education/02.dotx" style="color: lightskyblue">"Положении о коммерческой тайне и конфиденциальной информации
    в ГК «ЛАМА»"</a>, находящемся в локальной сети, в папке \Info\Документы ИБ.<br>

    Запрещается:<br>
    - Сообщать устно или письменно другим сотрудникам ГК "ЛАМА" и контрагентов сведения, отнесённые к коммерческой
    тайне или конфиденциальной информации, если это не является служебной необходимостью;<br>
    - Сообщать устно или письменно лицам, не являющимся сотрудниками ГК "ЛАМА" и контрагентов, сведения,
    отнесённые к коммерческой тайне или конфиденциальной информации, без письменного указания вышестоящего руководителя.<br>
    - Использовать известную коммерческую тайну в личных целях.<br>
    - Хранить коммерческую тайну в общем доступе (в т ч. в папках "Общая" и "Info");</p>


    <div class="butt1">
        <a href="curs_edu08.php">
            <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px"> Назад</button>
        </a>
    </div>
    <div class="butt2">
        <a href="curs_edu10.php">
            <button type="button" class="btn btn-success btn-lg btn3d"><span class="glyphicon glyphicon-ok"></span> Вперёд</button>
        </a>
    </div>
    <div class="butt3">
        <a href="index.php">
            <button type="button" class="btn btn-danger btn-lg btn3d" title="Перейти на начальную страницу"><span class="glyphicon glyphicon-remove"></span></button>
        </a>
    </div>
    <div class="progress top-bar" >
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="10" style="width:90%">
            90%
        </div>
    </div>
</div>

</html>