<?php
session_start();
include_once 'funk.php';
include_once 'head_edu.tpl';
?>

<!DOCTYPE HTML>
<html>
<script src="jquery.js"></script>
<div id="edu" >
    <p class="animated flipInX tq"> 4. Парольная защита </p><br>
    <!-- <img src="pic/parol.jpg" class="animated fadeInRightBig rightimg delay1" > -->
    <p class="animated bounceInUp delay1">Пароль должен содержать не менее 8 символов, и одновременно включать следующие символы: латинские маленькие или
    заглавные буквы, цифры и специальные символы (%, №, », ! и т.п.).<br>
    Запрещается: <br>
    - использовать в качестве пароля комбинацию цифр, свои имя, фамилию, дату рождения
    , имена  родственников, кличку домашних животных и т.п.;</p>
    <img src="pic/pass1.jpg" class="animated fadeInRightBig rightimg delay1">
    <p class="animated bounceInUp delay1">
    - фиксировать на каких-либо носителях (бумаге, файлах) пароль;<br>
    - разглашать свои персональные пароли доступа.<br>
    Воспользуйтесь кнопкой "Проверить пароль" на этой странице, чтобы узнать правильно ли Вы поняли требования к паролю.<br>
    Пользователь несёт ответственность за действия, выполненные от имени его учётной записи.<br>
    В случае огласки пароля пользователь должен немедленно изменить его.</p>
    <img src="pic/talk1.jpg" class="animated fadeInRightBig rightimg delay1" >
    <p class="animated bounceInUp delay1">
    При неправильном вводе пароля 7 раз, учётная запись блокируется на 10 мин.</p>
    <img src="pic/cad.png" class="animated fadeInLeft leftimg1 delay1">
    <p class="animated bounceInUp delay1">
    При истечении срока действия пароля следует нажать клавиши "Ctrl"+"Alt"+"Delete" ввести старый пароль и два раза новый.<br>
    <br></p>


    <div class="butt1">
        <a href="curs_edu04.php">
            <button type="button" class="btn btn-success btn-lg btn3d" style="width: 120px"> Назад</button>
        </a>
    </div>
    <div class="butt2">
        <a href="curs_edu06.php">
            <button type="button" class="btn btn-success btn-lg btn3d"><span class="glyphicon glyphicon-ok"></span> Вперёд</button>
        </a>
    </div>
    <div class="butt3">
        <a href="index.php">
            <button type="button" class="btn btn-danger btn-lg btn3d" title="Перейти на начальную страницу"><span class="glyphicon glyphicon-remove"></span></button>
        </a>
    </div>
    <div class="progress top-bar" >
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="10" style="width:50%">
            50%
        </div>
    </div>
    <!--<input type="submit" id="test_parol" value="Провеить пароль"/>-->
    <button type="button" id="test_parol" class="btn btn-warning btn-lg btn3d"><span class="glyphicon glyphicon-warning-sign"></span> Проверить пароль</button>

<!--    <img src="pic/arrow_to_left.png" id="arrow_to_left" alt="arrow"/>
    <div id="comment05"> Рекомендуем проверить правильно ли Вы поняли требования к паролю</div>-->
</div>




<script>
    //var parol = 111;
    //var str=parol.toString();
   /* $(document).ready(function (){
        $('#test_parol').click(function (){
            var parol = 'das'; //prompt ('Введите пробный пароль:');
            var str=parol.toString();
            if (str.indexOf('d') !== -1)
            {alert ('Верно, вы правильно поняли правила формаирования пароля')}
            else {alert ('Нет, не правильно, попробуйте ещё раз')}
        })
    });
*/



   /* var allLetter = function (inputtxt)
    {
        var letters =  //  /^[A-Za-z]+$/;
        if(inputtxt.value.match(letters))
        {
            alert('Your name have accepted : you can try another');
            return true;
        }
        else
        {
            alert('Please input alphabet characters only');
            return false;
        }
    };
    $(document).ready(function () {
        $('#test_parol').click(function () {
            allLetter(str);
        });
    });*/
    var a=0;
    var b=0;
    var c=0;
    var f=0;
    var g=0;

    var nek1 = function(data) {
        var iChars = "!@#$%^&*()+=-[]\\\'\";,./{}|:<>?~_№;:?";
        for (var i = 0; i < data.length; i++) {
            if (iChars.indexOf(data.charAt(i)) != -1) {a = 1;}
            else {}
        }
      //alert(a);
       if (a ==0 ) {alert ('В вашем пароле не хватает специальных символов')} else {}
    };
    var nek2 = function(data) {
        var iChars = "0123456789";
        for (var i = 0; i < data.length; i++) {
            if (iChars.indexOf(data.charAt(i)) != -1) {b = 1;}
            else {}
        }
        //alert(b);
        if (b ==0 ) {alert ('В вашем пароле не хватает цифр')} else {}
    };
    var nek3 = function(data) {
        var iChars = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
        for (var i = 0; i < data.length; i++) {
            if (iChars.indexOf(data.charAt(i)) != -1) {c = 1;}
            else {}
        }
        //alert(c);
        if (c ==0 ) {alert ('В вашем пароле не хватает латинских букв')} else {}
    };
    var nek4 = function(data) {
        var iChars = "йцукенгшщзхъфывапролджэячсмитьбюЙЦУКЕНГШЩЗХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮ";
        for (var i = 0; i < data.length; i++) {
            if (iChars.indexOf(data.charAt(i)) != -1) {f = -1;}
            else {}
        }
        //alert(f);
        if (f == -1 ) {alert ('В вашем пароле не должно быть русских букв (кирилицы)')} else {}
    };
    $(document).ready(function () {
        $('#test_parol').click(function () {
            var parol = prompt ('Введите пробный пароль:');
            nek1(parol);
            nek2(parol);
            nek3(parol);
            nek4(parol);
            if (parol.length < 8) {g= -1; alert ('пароль должен быть более 7 символов')}else {}
            var d = a+b+c+f+g;
            if ( d == 3 ){alert("У вас правильный пароль" );
                a=0;
                b=0;
                c=0;
                f=0;
                g=0;
                }
            else {alert("У вас НЕ правильный пароль. Попробуйте ещё раз. " );
                a=0;
                b=0;
                c=0;
                f=0;
                g=0;
                }
            d=0;
        });

    });
    a=0;
    b=0;
    c=0;
    f=0;
    g=0;

  /*
    $(document).ready(function(){
        $('.butt2').hover (function(){$('#arrow_to_left').animate({opacity:1},500)},function(){$('#arrow_to_left').animate({opacity:0},500)});
        $('.butt2').hover (function(){$('#comment05').animate({opacity:1},500)},function(){$('#comment05').animate({opacity:0},500)})
    });*/
</script>

</html>