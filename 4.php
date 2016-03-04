<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");
$link=connect();

if (isset ($_POST['pc3']) && isset ($_POST['pc8'])
 && !isset($_POST['pc1']) && !isset($_POST['pc2'])
 && !isset($_POST['pc6']) && !isset($_POST['pc4'])
 && !isset($_POST['pc5']) && !isset($_POST['pc7']))
{
    $q04="UPDATE `lama` SET `quest_04` = '1' WHERE `lama_id`=".$_SESSION['lama_id'];
}
else
{
    $q04="UPDATE `lama` SET `quest_04` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
}

$res = $link->query($q04);

?>
    <!DOCTYPE HTML>
    <html>
    <div id='centr-q'>
    <div id="quest" >

        <p class="tq">4. Использование корпоративной сети и Интернет.</p> <br />
        <form method="post" action="5.php">
            Укажите верные утверждения:<br /><br />

            <input id="in1" class="checkbox" type="checkbox" name="inet1" value="0" />
            <label for="in1">Могу использовать интернет в личных целях, после работы, т.к. это не влияет на мою работу</label> <br>
            <input id="in2" class="checkbox" type="checkbox" name="inet2" value="0" />
            <label for="in2">Могу загружать из интернет программное обеспечение необходимое мне для работы</label> <br>
            <input id="in3" class="checkbox" type="checkbox" name="inet3" value="1" />
            <label for="in3">Могу использовать общие папки сервера и почту для передачи рабочих файлов сотрудникам <br>организации </label> <br>
            <input id="in4" class="checkbox" type="checkbox" name="inet4" value="0" />
            <label for="in4">Могу дать возможность коллеге скачать из интернета необходимую информацию, без моего участия </label> <br>
            <input id="in5" class="checkbox" type="checkbox" name="inet5" value="0" />
            <label for="in5">Могу  отправлять личные объявления в корпоративный чат, в обеденное время</label> <br>
            <input id="in6" class="checkbox" type="checkbox" name="inet6" value="0" />
            <label for="in6">Могу  хранить рабочую информацию на сайтах с сервисом передачи и хранения информации</label> <br>
            <input id="in7" class="checkbox" type="checkbox" name="inet7" value="1" />
            <label for="in7">Могу хранить рабочую информацию только в папке отдела на сервере организации либо на <br>своём рабочем компьютере</label> <br>
            <br />
            <br />
            <br />
            <br />
            <div style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/><br></div>
            </form>

        <div class="strings"><p>4/10</p></div>
    </div>
    </div>
  <!--  <a href="5.php">
        <div class="knopka3 ">
            <p>Далее</p>
        </div>
    </a>-->
    </html>