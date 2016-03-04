<?php
session_start();
include_once 'head.tpl';
include_once "funk.php";
?>
<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest" >

        <p class="tq"> 1. Требования к паролю.</p><br>
        <form method="post" action="2.php">
            А. Какие комбинации символов из перечисленных ниже допустимо использовать в качестве пароля:<br><br>
            <input id="ch1" class="checkbox" type="checkbox" name="space1" value="0" />
            <label for="ch1">12358934</label><br>
            <input id="ch2" class="checkbox" type="checkbox" name="space2" value="0" />
            <label for="ch2">password</label> <br>
            <input id="ch3" class="checkbox" type="checkbox" name="space3" value="1" />
            <label for="ch3">!345tyFDD</label> <br>
            <input id="ch4" class="checkbox" type="checkbox" name="space4" value="0" />
            <label for="ch4">Егор123</label>  <br>
           <!-- <input id="ch5" class="checkbox" type="checkbox" name="space5" value="1" />
            <label for="ch5">радуга</label> <br> -->
            <br>

            Б.	Как верно сменить пароль, когда закончился его срок действия? <br>

            <input id="but1" class="checkbox" type="checkbox" name="button1" value="0" />
            <label for="but1">Сообщить системным администраторам, чтобы сменили пароль</label><br>
            <input id="but2" class="checkbox" type="checkbox" name="button2" value="1" />
            <label for="but2">Нажать Ctrl+Alt+Del, нажать сменить пароль, ввести старый пароль, ввести новый пароль 2 раза</label><br>
            <input id="but3" class="checkbox" type="checkbox" name="button3" value="0" />
            <label for="but3">Нажать Ctrl+Shift+Del, нажать сменить пароль, ввести старый пароль, ввести новый пароль 2 раза</label><br>
            <input id="but4" class="checkbox" type="checkbox" name="button4" value="0" />
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