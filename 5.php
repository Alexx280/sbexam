<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");
$link=connect();

if (isset ($_POST['inet3']) && isset ($_POST['inet7'])
    && !isset($_POST['inet1']) && !isset($_POST['inet2'])
    && !isset($_POST['inet4']) && !isset($_POST['inet5'])
    && !isset($_POST['inet6']))
{
    $q05="UPDATE `lama` SET `quest_05` = '1' WHERE `lama_id`=".$_SESSION['lama_id'];
}
else
{
    $q05="UPDATE `lama` SET `quest_05` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
}

$res = $link->query($q05);

?>
<!DOCTYPE HTML>
<html>
<div id='centr-q'>
<div id="quest" >

    <p class="tq"> 5. Доступ и ответственность. </p> <br />
    <form method="post" action="6.php">
        Укажите верные утверждения:<br /><br />
        <input id="ot1" class="checkbox" type="checkbox" name="otv1" value="0" />
        <label for="ot1">Для получения доступа к ресурсам сети сотруднику необходимо позвонить Администраторам корпоративной сети</label><br>
        <input id="ot2" class="checkbox" type="checkbox" name="otv2" value="0" />
        <label for="ot2">Для получения доступа к ресурсам сети сотруднику необходимо написать обращение системным администраторам (итилиум) или обратиться в Руководителю</label><br>
        <input id="ot3" class="checkbox" type="checkbox" name="otv3" value="0" />
        <label for="ot3">Для получения доступа к ресурсам сети сотруднику сначала обратиться в отдел информационной безопасности, и затем к Администраторам корпоративной сети</label><br>
        <input id="ot4" class="checkbox" type="checkbox" name="otv4" value="0" />
        <label for="ot4">Ответственность за соблюдения правил информационной безопасности несут только руководители подразделений и служба безопасности</label><br>
        <input id="ot5" class="checkbox" type="checkbox" name="otv5" value="0" />
        <label for="ot5">Ответственность за соблюдения правил информационной безопасности несут все сотрудники</label><br>
        <br/>
        <br/>
        <br/>
        <br/>
        <div style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/></br></div>

    </form>

    <div class="strings"><p>5/10</p></div>
</div>
</div>
<!--<a href="6.php">
    <div class="knopka3 ">
        <p>Далее</p>
    </div>
</a>-->
</html>