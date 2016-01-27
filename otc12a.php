<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <style type="text/css">
        table {
            border-collapse: collapse; /* Убираем двойные линии между ячейками */
            width: 500px; /* Ширина таблицы */
        }
        th {background: #fc0;}
     </style>

</head>
<body>
<!--<div class="ui-widget ui-corner-all">Hello </div>
<form method="post" action="ZZ.php" >
    Фамилия:<br>
    <input type="text" id="fa" name="family" size="30" required="required"  title="введите фамилию" ><br><br>
    <input type="submit" value="Получить полное имя" class="table-form" />

</form>-->
<b>Места инструктирования сотрудников в Декабре 2015г.</b><br>
<table border="2">
<tr ><th colspan='3'>Офис на ул.Кулагина:</th></tr>
<?php
include_once ("funk.php");
$link=connect();
//Вывод в таблице Инструктажей на Кулагина:
$login=
    "SELECT * FROM `lama` WHERE date_test LIKE '2015-12%' AND `place` = 'Офис на ул.Кулагина'";//.$_POST['family']."'";
    //"SELECT * FROM `lama` WHERE family= '".$_POST['family']."'";
$res = $link->query($login) ;
$i=1;
//echo ("<table border=''>" );
while($row = $res->fetch_assoc()){
    $family = $row['family'];
    $name_user = $row['name'];
    $father_name_user = $row['father_name'];
    $date_test = $row['date_test'];
    $job = $row['job'];
    $place = $row['place'];
    echo ('<tr>');
    echo ('<td>'.$i. ' <br> </td>');
    $i=$i+1;
    echo ('<td>'.$family.' '.$name_user.' '.$father_name_user. ' <br> </td>');
    echo ('<td>'.$job.'<br> </td>' );
    echo ('</tr>');
};
?>
</table>
<br>
<table border="2">
<tr ><th colspan='3'>Офис в ТЦ Мармелайт:</th></tr>
<?php
    //Вывод в таблице Инструктажей на Кулагина:
    $login=
    "SELECT * FROM `lama` WHERE date_test LIKE '2015-12%' AND `place` = 'ТЦ Мармелайт'";//.$_POST['family']."'";
    //"SELECT * FROM `lama` WHERE family= '".$_POST['family']."'";
    $res = $link->query($login) ;
    $i=1;
    //echo ("<table border=''>" );
        while($row = $res->fetch_assoc()){
        $family = $row['family'];
        $name_user = $row['name'];
        $father_name_user = $row['father_name'];
        $date_test = $row['date_test'];
        $job = $row['job'];
        $place = $row['place'];
        echo ('<tr>');
            echo ('<td>'.$i. ' <br> </td>');
            $i=$i+1;
            echo ('<td>'.$family.' '.$name_user.' '.$father_name_user. ' <br> </td>');
            echo ('<td>'.$job.'<br> </td>' );
            echo ('</tr>');
        };
?>
</table>
<br>
<table border="2">
<tr ><th colspan='3'>Офис на ул.Ленина:</th></tr>
<?php
    //Вывод в таблице Инструктажей на Кулагина:
    $login=
    "SELECT * FROM `lama` WHERE date_test LIKE '2015-12%' AND `place` = 'Офис на ул.Ленина'";//.$_POST['family']."'";
    //"SELECT * FROM `lama` WHERE family= '".$_POST['family']."'";
    $res = $link->query($login) ;
    $i=1;
    //echo ("<table border=''>" );
        while($row = $res->fetch_assoc()){
        $family = $row['family'];
        $name_user = $row['name'];
        $father_name_user = $row['father_name'];
        $date_test = $row['date_test'];
        $job = $row['job'];
        $place = $row['place'];
        echo ('<tr>');
            echo ('<td>'.$i. ' <br> </td>');
            $i=$i+1;
            echo ('<td>'.$family.' '.$name_user.' '.$father_name_user. ' <br> </td>');
            echo ('<td>'.$job.'<br> </td>' );
            echo ('</tr>');
        };
?>
</table>
</body>
</html>

