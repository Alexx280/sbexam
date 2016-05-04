<?php
include_once 'funk.php';
include_once 'head_edu.tpl';

?>
<!DOCTYPE HTML>


<html>

<head>
    <link rel='stylesheet' type='text/css' href='animate.css'/>
    <!-- Latest compiled and minified CSS
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.js"></script>

</head>

<div id="edu" class="tada">
    <p class="tf">
        Для успешной сдачи зачёта необходимо ответить  <br>правильно минимум на 7 из 10 вопросов.<br>
        В каждом вопросе может быть несколько ответов.<br>
        Вернуться на предыдущитй вопрос будет невозможно.<br>
        На каждый вопроc выделено по 2 минуты<br>
        <br><br></p>
    <center>
    <form method="post" action="test.php">
        <input type="submit" value="Вперёд" class="table-form"/>
    </form><br>
    <form method="post" action="curs_edu19.php">
        <input type="submit" value="Почитать инструкции" class="table-form" />
    </form>
    </center>
    <!--
    <div class="butt4">
        <a href="curs_edu19.php">
            <button type="button" class="btn btn-info btn-lg btn3d "><span class="glyphicon glyphicon-question-sign"></span> Info</button>
        </a>
    </div>
    test
    <img src="pic/arrow_top.png" id="arrow">
    <div id="comment0"> Рекомендуем </div>-->

</div>

<script>
    $(document).ready(function(){
        $('.butt1').hover (function(){$('img').animate({opacity:1},500)},function(){$('img').animate({opacity:0},1000)});
        $('.butt1').hover (function(){$('#comment0').animate({opacity:1},500)},function(){$('#comment0').animate({opacity:0},1000)})
    });

    </script>


</html>