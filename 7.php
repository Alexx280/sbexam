<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");
$link=connect();
/*
if (isset ($_POST['kt3']) && !isset($_POST['kt1'])
    && !isset($_POST['kt2'])&& !isset($_POST['kt4'])&& !isset($_POST['kt5']))
{
    $q07="UPDATE `lama` SET `quest_07` = '1' WHERE `lama_id`=".$_SESSION['lama_id'];
}
else
{
    $q07="UPDATE `lama` SET `quest_07` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
}*/
$q="UPDATE `lama` SET `quest_07` = '".$_POST['kt']."' WHERE `lama_id`=".$_SESSION['lama_id'];
$res = $link->query($q);
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest" >

        <p class="tq">7. Передача файлов.</p><br />
        <form method="post" action="8.php">
            Сотрудник из другого отдела попросил предать ему файл размером 25Мб с конфиденциальной информацией, как вы поступите:<br /><br>
            <input id="fi1" class="checkbox" type="radio" name="file" value="0" />
            <label for="fi1">Создам папку на сервере в папке \\intel2\Общая\"моя папка", и скопирую туда файл </label><br>
            <input id="fi2" class="checkbox" type="radio" name="file" value="0" />
            <label for="fi2">Отправлю файл по почте</label><br>
            <input id="fi3" class="checkbox" type="radio" name="file" value="1" />
            <label for="fi3">Поставлю пароль на файл, найду его папку в папке "Общая" и скопирую туда файл</label><br>
            <input id="fi4" class="checkbox" type="radio" name="file" value="0" />
            <label for="fi4">Создам папку на своём компьютере, открою общий доступ и скопирую туда файл</label><br>
            <input id="fi5" class="checkbox" type="radio" name="file" value="0" />
            <label for="fi5">Выложу на сайт HDD.tomsk.ru</label><br>
            <input id="fi6" class="checkbox" type="radio" name="file" value="0" />
            <label for="fi6">Нет правильного варианта</label><br>
            <br/><br/><br/><br/><br/><br/>
            <div style="text-align: center;"> <input type="submit" value="Дальше" class="table-form"/></br></div>

        </form>
        <div class="strings"><p>7/10</p></div>
    </div>
</div>
</html>