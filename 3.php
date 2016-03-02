<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");
$link=connect();

if ( !isset($_POST['email2']) && !isset($_POST['email1']) && !isset($_POST['email4']) && !isset($_POST['email3']) && isset($_POST['email6'] ))
{
    $q03="UPDATE `lama` SET `quest_03` = '1' WHERE `lama_id`=".$_SESSION['lama_id'];
}
else
{
    $q03="UPDATE `lama` SET `quest_03` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
}

$res = $link->query($q03);
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
<div id="quest" >

    <p class="tq"> 3. Использование компьютера на рабочем месте.</p><br />
    <form method="post" action="4.php">
        Укажите верные утверждения:<br /><br />
        <input id="pc1" class="checkbox" type="checkbox" name="pc1" value="0" />
        <label for="pc1">При необходимости могу самостоятельно устанавливать дополнительные устройства (технические средства) на компьютер</label> <br>
        <input id="pc2" class="checkbox" type="checkbox" name="pc2" value="0" />
        <label for="pc2">Могу самостоятельно настраивать внешние носители (USB-флэш) </label> <br>
        <input id="pc3" class="checkbox" type="checkbox" name="pc3" value="0" />
        <label for="pc3">Могу размещать на рабочем столе компьютера рабочую информацию </label> <br>
        <input id="pc4" class="checkbox" type="checkbox" name="pc4" value="0" />
        <label for="pc4">Могу отремонтировать компьютерную технику, если мне понятна причина поломки</label> <br>
        <input id="pc5" class="checkbox" type="checkbox" name="pc5" value="1" />
        <label for="pc5">Рабочую станцию можно не блокировать если нужно выйти из кабинета в течении дня </label> <br>
        <input id="pc6" class="checkbox" type="checkbox" name="pc6" value="1" />
        <label for="pc6">Не следует допускать к работе за рабочей станцией сотрудников других подразделений с их индивидуальным паролем</label> <br>
        <input id="pc7" class="checkbox" type="checkbox" name="pc7" value="1" />
        <label for="pc7">Могу отключать антивирусную защиту, если не пользуюсь интернетом и съёмными носителями.</label> <br>
        <input id="pc8" class="checkbox" type="checkbox" name="pc8" value="1" />
        <label for="pc8">Для установки дополнительных программ необходимо написать обращение в Итилиум</label> <br>
        <br>
        <br>
        <br>
        <div style="text-align: center;"> <input type="submit" value="Дальше" class="table-form"/></br></div>
        </form>

    <div class="strings"><p>3/10</p></div>
</div>
</div>
<!--<a href="4.php">
    <div class="knopka3 ">
        <p>Далее</p>
    </div>
</a>-->
</html>