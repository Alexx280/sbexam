<?php
session_start();
include_once 'head1.tpl';
include_once ("funk.php");
$link=connect();
if ($_SESSION['lama_id'] != '') {
unset ($_SESSION['lama_id']);}
else {};

$login= "SELECT lama_id FROM `lama` WHERE family= '".$_POST['family']."' AND name = '".$_POST['name']."' AND code = '".$_POST['code']."'";
$res = $link->query($login) ;
$row = $res->fetch_assoc();
$_SESSION['lama_id'] = $row['lama_id'];

if (isset($_SESSION['lama_id'])){
    $income= "UPDATE `lama` SET `father_name` = '".$_POST['father_name']."',
                                     `pasp_n` = '".$_POST['pasp_n']."',
                                     `pasp_s` = '".$_POST['pasp_s']."',
                                    `factory` = '".$_POST['factory']."',
                                        `job` = '".$_POST['job']."',
                                      `place` = '".$_POST['place']."',
                                  `date_test` = '".date('y-m-d')."',
                                       `boss` = '".$_POST['boss']."'
                                                                    WHERE `lama_id`=".$_SESSION['lama_id'];
    $res = $link->query($income) ;
    echo ('
        <div id="centr-w">
            <div id="centr">
                <p class="tc"> Добрый день, '.$_POST['name'].'  '.$_POST['father_name'].' .<br>
                Для успешной сдачи зачёта необходимо ответить правильно <br> минимум на 7 из 10 вопросов.<br>
                В каждом вопросе может быть несколько ответов.<br>
                Вернуться на предыдущитй вопрос будет невозможно.<br>
                На каждый вопроc выделено по 2 минуты<br>
                <br><br></p>
                <form method="post" action="1.php">
                    <input type="submit" value="Вперёд" class="table-form"/>
                </form><br>
                <form method="post" action="curs_edu19.php"></p>
                    <input type="submit" value="Почитать инструкции" class="table-form" />
                </form>
            </div>
        </div>
        ');
}
else {echo('
        <div id="centr-w" >
            <div id="centr" >
                <p class="tc"> Вы ввели не корректную информацию </br></br></p>
                <form method="post" action="test.php">
                    <input type="submit" value="Ещё раз" class="table-form"/>
                </form>
            </div>
        </div>
    ');
}
?>
