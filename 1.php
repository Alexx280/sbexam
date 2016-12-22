<?php
session_start();
include_once 'head.tpl';
include_once "funk.php";

$link=connect();
$q0="UPDATE `lama` SET `see` = ' ' WHERE `lama_id`=".$_SESSION['lama_id'];
$q1="UPDATE `lama` SET `quest_01` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
$q2="UPDATE `lama` SET `quest_02` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
$q3="UPDATE `lama` SET `quest_03` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
$q4="UPDATE `lama` SET `quest_04` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
$q5="UPDATE `lama` SET `quest_05` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
$q6="UPDATE `lama` SET `quest_06` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
$q7="UPDATE `lama` SET `quest_07` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
$q8="UPDATE `lama` SET `quest_08` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
$q9="UPDATE `lama` SET `quest_09` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
$q10="UPDATE `lama` SET `quest_10` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
$q11="UPDATE `lama` SET `quest_11` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
$q12="UPDATE `lama` SET `quest_12` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
$res = $link->query($q0);
$res = $link->query($q1);
$res = $link->query($q2);
$res = $link->query($q3);
$res = $link->query($q4);
$res = $link->query($q5);
$res = $link->query($q6);
$res = $link->query($q7);
$res = $link->query($q8);
$res = $link->query($q9);
$res = $link->query($q10);
$res = $link->query($q11);
$res = $link->query($q12);
?>
<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest" >

        <p class="tq"> 1. Требования к паролю.</p><br>
        <form method="post" action="2.php">
            А. Какие комбинации символов из перечисленных ниже допустимо использовать в качестве пароля:<br><br>
            <input id="ch1" class="checkbox" type="radio" name="space" value="0" />
            <label for="ch1">12358934</label><br>
            <input id="ch2" class="checkbox" type="radio" name="space" value="0" />
            <label for="ch2">password</label> <br>
            <input id="ch3" class="checkbox" type="radio" name="space" value="1" />
            <label for="ch3">!345tyFDD</label> <br>
            <input id="ch4" class="checkbox" type="radio" name="space" value="0" />
            <label for="ch4">Егор123</label>  <br>
            <br>

            Б.	Как верно сменить пароль, когда закончился его срок действия? <br>

            <input id="but1" class="checkbox" type="radio" name="button" value="0" />
            <label for="but1">Сообщить системным администраторам, чтобы сменили пароль</label><br>
            <input id="but2" class="checkbox" type="radio" name="button" value="1" />
            <label for="but2">Нажать Ctrl+Alt+Del, нажать сменить пароль, ввести старый пароль, ввести новый пароль 2 раза</label><br>
            <input id="but3" class="checkbox" type="radio" name="button" value="0" />
            <label for="but3">Нажать Ctrl+Shift+Del, нажать сменить пароль, ввести старый пароль, ввести новый пароль 2 раза</label><br>
            <input id="but4" class="checkbox" type="radio" name="button" value="0" />
            <label for="but4">Нажать Ctrl+Alt+Del, нажать сменить пароль, попросить администраторам сети сменить пароль</label><br>
             <br>

            В. Введите пример пароля в соответствии с требовниями инструкции:
            <input type="text" name="parol" size="20"/><br><br>

            <div style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/><br></div>
        </form>

        <div class="strings"><p>1/10</p></div>
        <!--<div class="progress top-bar" >
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="10" style="width:12.5%">
                12.5%
            </div>-->
    </div>
</div>
</html>