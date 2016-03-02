<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");
$link=connect();

if (isset ($_POST['s4']) && !isset($_POST['s1']) && !isset($_POST['s2']) && !isset($_POST['s3']) && !isset($_POST['s5'])
)
{
    $q10="UPDATE `lama` SET `quest_12` = '1' WHERE `lama_id`=".$_SESSION['lama_id'];
}
else
{
    $q10="UPDATE `lama` SET `quest_12` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
}

$res = $link->query($q10);
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest" >

        <p class="tq">10. Регламентирующие документы.</p><br />

            <form method="post" action="end.php" style="">
                Укажите каким документом регламентируется ответственность за:<br><br>
                Неправомерный доступ к компьютерной информации:
                <select name="law1" style="width: 244px text-align: center">
                    <option value="Нет">Выберите из списка</option>
                    <option value="Да">Уголовной кодекс РФ</option>
                    <option value="Нет">Гражданский кодекс РФ</option>
                    <option value="Нет">Кодекс об административных правонарушениях РФ</option>
                    <option value="Нет">Внутренние документы компании</option>
                    <option value="Нет">Это не регламентируется</option>
                    <option value="Нет">Нет верного варианта</option>
                </select><br><br>
                Разглашение информации с ограничнным доступом:
                <select name="law2" style="width: 294px text-align: center">
                    <option value="Нет">Выберите из списка</option>
                    <option value="Нет">Уголовной кодекс РФ</option>
                    <option value="Нет">Гражданский кодекс РФ</option>
                    <option value="Да">Кодекс об административных правонарушениях РФ</option>
                    <option value="Нет">Внутренние документы компании</option>
                    <option value="Нет">Это не регламентируется</option>
                    <option value="Нет">Нет верного варианта</option>
                </select><br><br>
                Неправомерный поиск информации по компьютерной сети:
                <select name="law3" style="width: 244px text-align: center">
                    <option value="Нет">Выберите из списка</option>
                    <option value="Нет">Уголовной кодекс РФ</option>
                    <option value="Нет">Гражданский кодекс РФ</option>
                    <option value="Нет">Кодекс об административных правонарушениях РФ</option>
                    <option value="Нет">Внутренние документы компании</option>
                    <option value="Да">Это не регламентируется</option>
                    <option value="Да">Нет верного варианта</option>
                </select><br><br>
                Распространение вирусных программ в компьютерной сети:
                <select name="law4" style="width: 244px text-align: center">
                    <option value="Нет">Выберите из списка</option>
                    <option value="Да">Уголовной кодекс РФ</option>
                    <option value="Нет">Гражданский кодекс РФ</option>
                    <option value="Нет">Кодекс об административных правонарушениях РФ</option>
                    <option value="Нет">Внутренние документы компании</option>
                    <option value="Нет">Это не регламентируется</option>
                    <option value="Нет">Нет верного варианта</option>
                </select><br><br>
                <br><br><br><br><br>
                <div style="text-align: center;">
                    <input type="submit" value="Дальше" class="table-form"/><br>
                </div>

            </form>

        <div class="strings"><p>10/10</p></div>
    </div>
</div>
<!--   <a href="end.php">
       <div class="knopka3 ">
           <p>Далее</p>
       </div>
   </a>-->

</html>