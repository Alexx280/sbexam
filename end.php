<?php
session_start();
include_once 'head1.tpl';
include_once ("funk.php");

$link=connect();

$law1="UPDATE `lama` SET `law1` = '".$_POST['law1']."' WHERE `lama_id`=".$_SESSION['lama_id'];
$law2="UPDATE `lama` SET `law2` = '".$_POST['law2']."' WHERE `lama_id`=".$_SESSION['lama_id'];
$law3="UPDATE `lama` SET `law3` = '".$_POST['law3']."' WHERE `lama_id`=".$_SESSION['lama_id'];
$law4="UPDATE `lama` SET `law4` = '".$_POST['law4']."' WHERE `lama_id`=".$_SESSION['lama_id'];
$res = $link->query($law1);
$res = $link->query($law2);
$res = $link->query($law3);
$res = $link->query($law4);

/*if (isset ($_POST['s4']) && !isset($_POST['s1']) && !isset($_POST['s2']) && !isset($_POST['s3']) && !isset($_POST['s5'])
)
{
    $q10="UPDATE `lama` SET `quest_12` = '1' WHERE `lama_id`=".$_SESSION['lama_id'];
}
else
{
    $q10="UPDATE `lama` SET `quest_12` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
}

$res = $link->query($q10);*/

$login= "SELECT * FROM `lama` WHERE lama_id= '".$_SESSION['lama_id']."'";
$res = $link->query($login) ;
$row = $res->fetch_assoc();
if($row['law1']=='Да' && $row['law2']=='Да' && $row['law3']=='Да' && $row['law4']=='Да') {
    $q11="UPDATE `lama` SET `quest_10` = '1' WHERE `lama_id`=".$_SESSION['lama_id'];
}
else
{
    $q11="UPDATE `lama` SET `quest_10` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
}
$res = $link->query($q11);

$login= "SELECT * FROM `lama` WHERE lama_id= '".$_SESSION['lama_id']."'";
$res = $link->query($login) ;
$row = $res->fetch_assoc();

$zachet = $row['quest_01']+$row['quest_02']+$row['quest_03']+$row['quest_04']+$row['quest_05']+
          $row['quest_06']+$row['quest_07']+$row['quest_08']+$row['quest_09']+$row['quest_12']+$row['quest_10'];

if ($row['quest_01']==0 || $row['quest_02']==0 ){$ssd1='Требования к паролю, ';}
else {};
if ($row['quest_03']==0){$ssd3='Использование электронной почты, ';}
else {};
if ($row['quest_04']==0){$ssd4='Использование компьютера на рабочем месте, ';}
else {};
if ($row['quest_05']==0){$ssd5='Использование корпоративной сети и Интернет, ';}
else  {};
if ($row['quest_06']==0){$ssd6='Доступ и ответственность, ';}
else  {};
if ($row['quest_07']==0){$ssd7='Коммерческая тайна, ';}
else {};
if ($row['quest_08']==0){$ssd8='Передача файлов, ';}
else {};
if ($row['quest_09']==0){$ssd9='Срочная работа, ';}
else {};
if ($row['quest_12']==0){$ssd10='Шифрование, ';}
else {};
if ($row['quest_10']==0){$ssd11='Регламентирующие документы. ';}
else {};

$osh=substr(($ssd1.$ssd3.$ssd4.$ssd5.$ssd6.$ssd7.$ssd8.$ssd9.$ssd10.$ssd11),0 ,-2);

    if ($zachet > 7) {
        if($row['login']!== NULL) {
            $zachet_ok = "UPDATE `lama` SET `zachet` = 'Зачёт' WHERE `lama_id`=" . $_SESSION['lama_id'];
            $res = $link->query($zachet_ok);
            $code = "UPDATE `lama` SET `code` = '" . rand(1000, 9999) . "' WHERE `lama_id`=" . $_SESSION['lama_id'];
            $res = $link->query($code);
            echo("<div id='centr-q'><div id='quest' ><p class='tc'>Поздравляем, " . $row['name'] . " " . $row['father_name'] . ",</br> вы сдали зачёт! <br>
            </p><center><img src='pic/test_ok1.png'></center>
            <p class='ti'> Ваш профиль настроен. </br>
            Для входа на компьютер используйте Имя пользователя: '".$row['login']." ', <br>
            временный пароль для первого входа: ".$row['password'].". </br>
            При отсутствии доступа обращайтесь к администраторам сети по тел. 1282 или 1244
            </p></div></div>" . $d);
                unset ($_SESSION['lama_id']);
        }
        else {
            $zachet_ok = "UPDATE `lama` SET `zachet` = 'Зачёт' WHERE `lama_id`=" . $_SESSION['lama_id'];
            $res = $link->query($zachet_ok);
            $code = "UPDATE `lama` SET `code` = '" . rand(1000, 9999) . "' WHERE `lama_id`=" . $_SESSION['lama_id'];
            $res = $link->query($code);
            echo("<div id='centr-q'><div id='quest' ><p class='tc'>Поздравляем, " . $row['name'] . " " . $row['father_name'] . ",</br> вы сдали зачёт! <br>
            </p><center><img src='pic/test_ok1.png'></center>
            <p class='ti'> Ваш профиль будет настроен в течении 4 часов, <br>
            права и программное обеспечение в соответствии с заявкой в Итилиуме. <br>
            Ваши имя и пароль доступа будут отправлены <br> Вашему руководителю (инициатору заявки) на почту.</p></div></div>" . $d);
            unset ($_SESSION['lama_id']);
        }

    }
    else {
        if ($row['try']==0) {
            $try="UPDATE `lama` SET `try` = '1' WHERE `lama_id`=".$_SESSION['lama_id'];
            $res = $link->query($try);
            $code="UPDATE `lama` SET `code` = '".rand(1000,9999)."' WHERE `lama_id`=".$_SESSION['lama_id'];
            $res = $link->query($code);
            echo ("<div id='centr-q'><div id='quest' style='height: 450px; '> <p class='tc'>".$row['name']." ".$row['father_name'].", вы не верно ответили на вопросы, <br/> можете попробовать ещё раз.  " .$d."</p><center><img src='pic/test_one.png'></center> Ваши ошибки в следующих разделах:<br>".
            $osh.". ". "<br><br>
             <form  action='1.php'>
            <center><input type='submit' value='Ещё раз' class='table-form'/></center>
            </form>
            <br/>
            <form  action='index.php'>
            <center><input type='submit' value='Я сдам в другой раз' class='table-form' /></center>
            </form></br>
            <form  action='curs_edu01.php'>
            <center><input type='submit' value='Прочитать инструкции' class='table-form' /></center>
            </form>

            </div> </div> ");
        }
        else {
            $try="UPDATE `lama` SET `try` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
            $res = $link->query($try);
            $code="UPDATE `lama` SET `code` = '".rand(1000,9999)."' WHERE `lama_id`=".$_SESSION['lama_id'];
            $res = $link->query($code);
            echo ("<div id='centr-q'><div id='quest' > <p class='tc'>".$row['name']." ".$row['father_name'].",  к сожалению вы не сдали зачёт.  " .$d."</p><center><img src='pic/test_out.png'></center>  <br/> Повторите следующие темы:<br/> <br/>".
                $osh.". ". "<br/> <br/> Прочтите инструкции, нажав кнопку ниже, после чего попробуйте ещё раз пройти тест.<br/>
                <form  action='curs_edu01.php'>
            <center><input type='submit' value='Прочитать инструкции' class='table-form' /></center>
            </form>
            </div> </div>");
            unset ($_SESSION['lama_id']);
        };
    }

?>
