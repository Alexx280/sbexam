<?php
session_start();
include_once 'funk.php';
include_once 'head_edu.tpl';
?>

<!DOCTYPE HTML>
<html>
<div id="edu" >
    <p class="animated bounceInUp">
        При использовании корпоративной электронной почты запрещается:<br>
    <br>

    -	производить рассылку не запрошенной получателем информации (спам, реклама);</br>
    -	открывать вложения в пришедших по электронной почте подозрительных писем, (письма от неизвестного адресата);</br>
    -	отправлять файлы с расширением *.exe, *.com, *.cmd, *.scr, *.bat, *.pif, а также аудио- и видео-файлы;</br>
    -	обмен сообщениями по личным вопросам.<br>
    -	 <input id="it51" class="comment51" type="checkbox" name="it51" value="1" style="display: none"/>
        <label for="it51" style="color: gold">хранить</label>
         в почтовой программе письма, содержащие конфиденциальную информацию в т.ч. в виде прикреплённых файлов.<br>



    </p>

    <div class="butt1">
        <a href="curs_edu06.php">
            <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px"> Назад</button>
        </a>
    </div>
    <div class="butt2">
        <a href="curs_edu08.php">
            <button type="button" class="btn btn-success btn-lg btn3d"><span class="glyphicon glyphicon-ok"></span> Вперёд</button>
        </a>
    </div>
    <div class="butt3">
        <a href="index.php">
            <button type="button" class="btn btn-danger btn-lg btn3d" title="Перейти на начальную страницу"><span class="glyphicon glyphicon-remove"></span></button>
        </a>
    </div>
    <div class="progress top-bar" >
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="10" style="width:70%">
            70%
        </div>
    </div>
</div>

</html>