<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");
$link=connect();
/*
if (isset ($_POST['work3']) && !isset($_POST['work1'])
    && !isset($_POST['work2']) && !isset($_POST['work5']))
{
    $q09="UPDATE `lama` SET `quest_09` = '1' WHERE `lama_id`=".$_SESSION['lama_id'];
}
else
{
    $q09="UPDATE `lama` SET `quest_09` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
}*/
$q="UPDATE `lama` SET `quest_09` = '".$_POST['work']."' WHERE `lama_id`=".$_SESSION['lama_id'];
$res = $link->query($q);
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest" >

        <p class="tq">9. Шифрование.</p><br />
        <form method="post" action="10.php">
            Как верно следует зашифровать для отправки файл формата Word / Excel с конфиденциальной информацией?<br><br>
            <input id="shi1" class="checkbox" type="radio" name="s" value="0" />
            <label for="shi1">Переименовать файл и его расширение</label><br>
            <input id="shi2" class="checkbox" type="radio" name="s" value="0" />
            <label for="shi2">Отправить в отдел ИТ с просьбой его зашифровать и отпраить самому</label><br>
            <input id="shi3" class="checkbox" type="radio" name="s" value="0" />
            <label for="shi3">Отправить в отдел СБ с просьбой его зашифровать и отправить получателю</label><br>
            <input id="shi4" class="checkbox" type="radio" name="s" value="1" />
            <label for="shi4">Установить пароль в параметрах файла</label><br>
            <input id="shi5" class="checkbox" type="radio" name="s" value="0" />
            <label for="shi5">Нет правильного варианта</label><br>
            <br/><br/><br/><br/><br/><br/><br/>
            <div style="text-align: center;"> <input type="submit" value="Дальше" class="table-form"/></br></div>

        </form>
        <div class="strings"><p>9/10</p></div>
    </div>
</div>
</html>