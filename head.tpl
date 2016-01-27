
<!DOCTYPE HTML>
<html>
<head>
    <meta charset='UTF-8'>
    <title> Тест по информационной безопасности </title>
    <link rel='stylesheet' type='text/css' href='design.css'/>
    <script type="text/javascript" src="function.js"> </script>
    <script type="text/javascript" src="jquery.js" ></script>

    <!--
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"
    <script src="bootstrap/js/bootstrap.min.js"></script>-->



       <script type="text/javascript" >
            var time = 120;
            var interval = setInterval(function() {
                --time;
                document.getElementById('timer').innerHTML = 'Время на этот вопрос: '+Math.floor(time / 60) + ':' + (time % 60);
                if (time === 0) {
                    clearInterval(interval);
                    alert('Время вышло!');
                    window.location = 'end.php';

                }
            }, 1000);
        </script>

</head>
<body>

<div id="timer"></div>

<div id="doc_time">
 Дата и время
    <script >
        clock();
    </script>

</div>



</body>