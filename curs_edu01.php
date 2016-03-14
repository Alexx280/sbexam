<?php
session_start();
include_once 'funk.php';
include_once 'head_edu.tpl';
?>
<!DOCTYPE HTML>
<html>
<head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<div id="edu" >
    <p class="animated flipInX tq"> 1. Понятие информационной безопасности.</p><br>
    <!--<img src="pic/local-net.png" class="animated fadeInLeft leftimg delay1">-->
    <p class="animated bounceInUp delay1">
        <i> Информационная безопасность </i> – это защищенность информации и поддерживающей инфраструктуры от случайных или преднамеренных
        воздействий естественного или искусственного характера, чреватых нанесением ущерба владельцам или пользователям информации
        и поддерживающей инфраструктуры. Компания может пострадать (понести убытки) не только от несанкционированного доступа,
        но и от поломки системы, вызвавшей перерыв в обслуживании клиентов.<br>
        Под безопасностью информации понимается такое ее состояние, при котором исключается возможность просмотра,
        изменения или уничтожения информации лицами, не имеющими на это права. <br><br>
        Цель соблюдения данных правил обеспечить безопасность информации, являющейся коммерческой тайной.<br>
        <i>Коммерческая тайна</i> - это конфиденциальность информации, позволяющая ее обладателю при существующих или возможных
        обстоятельствах увеличить доходы, избежать неоправданных расходов, сохранить положение на рынке товаров, работ,
        услуг или получить иную коммерческую выгоду. <br>
        Не выполнене правил информационной безопасности повлечёт дополнительные трудозатраты отделов ИТС и СБ,
        снижение эффективности работы других отделов (бухгалтерии, отдела кадров, коммерческого департамента, операционного департамента).<br>
        Тем самым вы увеличите расходы и сократите доходы Компании.
        </p>
    <div class="butt1">
    <a href="curs_edu19.php">
        <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px"> Назад</button>
    </a>
    </div>
    <div class="butt2">
    <a href="curs_edu02.php">
        <button type="button" id="win" class="btn btn-success btn-lg btn3d"><span class="glyphicon glyphicon-ok"></span> Вперёд</button>
    </a>
    </div>
    <div class="butt3" id="win1">
        <a href="#">
            <button type="button" id="win" class="btn btn-danger btn-lg btn3d" title="Перейти на начальную страницу" onclick='messageShow()'><span class="glyphicon glyphicon-remove"></span></button>
        </a>
    </div>
    <div class="progress top-bar" >
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="10" style="width:10%">
            10%
        </div>
    </div>
</div>

<script type="text/javascript">
/*    function messageShow() {

        //$('#edu').append('Этот текст добавлен с помощью jQuery');
        $('#edu').html( "" +
        "<div id='centr-w'>" +
            "<div id='centr' style='text-align: center;  '  >" +
                "Введите пробный пароль <br>" +
                "<form method='post' action='#'>" +
                    "<input type='text' name='parol' size='20' style='text-align: center; color: red '/><br><br>"+
                    "<div style='text-align: center;'><input type='submit' value='Проверить' class='table-form'/><br></div>" +
                "</form>"+
            "<br><a href='curs_edu01.php'><button type='button' class='btn btn-success btn-lg btn3d' style='width: 120px'> Назад</button></a>" +
            "</div>" +
        "</div>");
    }
*/
</script>
<?php

?>

</html>