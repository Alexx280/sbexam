<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");

$link=connect();

$q0="UPDATE `lama` SET `see` = '".$_POST['parol']."' WHERE `lama_id`=".$_SESSION['lama_id'];
$q1="UPDATE `lama` SET `quest_01` = '".$_POST['space']."' WHERE `lama_id`=".$_SESSION['lama_id'];
$q2="UPDATE `lama` SET `quest_02` = '".$_POST['button']."' WHERE `lama_id`=".$_SESSION['lama_id'];
$res = $link->query($q1);
$res = $link->query($q2);
$res = $link->query($q0);
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
<div id="quest" >
    <p class="tq"> 2. Использование электронной почты. </p><br>
    <form method="post" action="3.php">
        Какие действия разрешены при использовании корпоративной электронной почты:<br><br>
        <input id="em1" class="checkbox" type="checkbox" name="email1" value="0" />
        <label for="em1">Пользоваться в личных целях вне рабочее время</label> <br>
        <input id="em2" class="checkbox" type="checkbox" name="email2" value="0" />
        <label for="em2">Отправлять поздравительную информацию сразу всем сотрудникам</label> <br>
        <input id="em3" class="checkbox" type="checkbox" name="email3" value="0" />
        <label for="em3">Отправка файлов-программ, а также аудио- и видео-роликов</label> <br>
        <input id="em4" class="checkbox" type="checkbox" name="email4" value="0" />
        <label for="em4">Использовать электронную почту коллег от своего имени</label> <br>
        <!--<input id="em5" class="checkbox" type="checkbox" name="email5" value="1" />
        <label for="em5">Рассылать объявления поздравительного характера в пределах отдела</label> <br>-->
        <input id="em6" class="checkbox" type="checkbox" name="email6" value="1" />
        <label for="em6">Нет правильного варианта</label> <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/></br></div>
         </form>
    <div class="strings"><p>2/10</p></div>
</div>
</div>
</html>