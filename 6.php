<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");
$link=connect();

if (isset ($_POST['otv2']) && isset ($_POST['otv5'])
    && !isset($_POST['otv1']) && !isset($_POST['otv3'])
    && !isset($_POST['otv4']))
{
    $q06="UPDATE `lama` SET `quest_06` = '1' WHERE `lama_id`=".$_SESSION['lama_id'];
}
else
{
    $q06="UPDATE `lama` SET `quest_06` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
}

$res = $link->query($q06);

?>
    <!DOCTYPE HTML>
    <html>
    <div id='centr-q'>
    <div id="quest" >

        <p class="tq">6. Коммерческая тайна.</p><br />
        <form method="post" action="7.php">
            Укажите верные утверждения:<br /><br />
            <input id="kt1" class="checkbox" type="checkbox" name="kt1" value="0" />
            <label for="kt1">К коммерческой тайне относится вся информация в организации</label><br>
            <input id="kt2" class="checkbox" type="checkbox" name="kt2" value="0" />
            <label for="kt2">Коммерческая тайна содержится только в финансовых и юридических документах</label><br>
            <input id="kt3" class="checkbox" type="checkbox" name="kt3" value="0" />
            <label for="kt3">Коммерческая тайна это различная информация позволяющая получить доход</label><br>
            <input id="kt4" class="checkbox" type="checkbox" name="kt4" value="1" />
            <label for="kt4">Я не буду работать с коммерческой тайной</label><br>
            <input id="kt5" class="checkbox" type="checkbox" name="kt5" value="1" />
            <label for="kt5">Нет правильного варианта</label><br>
            <br><br><br><br><br><br><br><br>
            <div style="text-align: center;"> <input type="submit" value="Дальше" class="table-form"/></br></div>

        </form>
        <div class="strings"><p>6/10</p></div>
    </div>
    </div>
 <!--   <a href="end.php">
        <div class="knopka3 ">
            <p>Далее</p>
        </div>
    </a>-->

    </html>