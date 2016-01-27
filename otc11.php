<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">

</head>
<body>
<!--<div class="ui-widget ui-corner-all">Hello </div>
<form method="post" action="ZZ.php" >
    Фамилия:<br>
    <input type="text" id="fa" name="family" size="30" required="required"  title="введите фамилию" ><br><br>
    <input type="submit" value="Получить полное имя" class="table-form" />

</form>-->
<b>Места инструктирования сотрудников в Ноябре 2015г.:</b><br><br>
<table border="2">
    <tr>
        <td>
            <?php
            include_once ("funk.php");
            $link=connect();
            $login=
                "SELECT * FROM `lama` WHERE date_test LIKE '2015-11%'";//.$_POST['family']."'";
            //"SELECT * FROM `lama` WHERE family= '".$_POST['family']."'";
            $res = $link->query($login) ;
            //echo ("<table border=''>" );
            while($row = $res->fetch_assoc()){
                $family = $row['family'];
                $name_user = $row['name'];
                $father_name_user = $row['father_name'];
                $date_test = $row['date_test'];
                $job = $row['job'];
                $place = $row['place'];
                echo ($family.' '.$name_user.' '.$father_name_user. ' <br>' );}
            //echo ("</table>" );
            //'.$job.'
            ?>
        </td>
        <td>
            <?php
            include_once ("funk.php");
            $link=connect();
            $login=
                "SELECT * FROM `lama` WHERE date_test LIKE '2015-11%'";//.$_POST['family']."'";
            //"SELECT * FROM `lama` WHERE family= '".$_POST['family']."'";
            $res = $link->query($login) ;
            //echo ("<table border=''>" );
            while($row = $res->fetch_assoc()){
                $family = $row['family'];
                $name_user = $row['name'];
                $father_name_user = $row['father_name'];
                $date_test = $row['date_test'];
                $job = $row['job'];
                $place = $row['place'];
                echo ($job.'<br>' );}
            //echo ("</table>" );
            //'.$job.'
            ?>
        </td>
        <td>
            <?php
            include_once ("funk.php");
            $link=connect();
            $login=
                "SELECT * FROM `lama` WHERE date_test LIKE '2015-11%'";//.$_POST['family']."'";
            //"SELECT * FROM `lama` WHERE family= '".$_POST['family']."'";
            $res = $link->query($login) ;
            //echo ("<table border=''>" );
            while($row = $res->fetch_assoc()){
                $family = $row['family'];
                $name_user = $row['name'];
                $father_name_user = $row['father_name'];
                $date_test = $row['date_test'];
                $job = $row['job'];
                $place = $row['place'];
                echo ($place.'<br>' );}
            //echo ("</table>" );
            //'.$job.'
            ?>
        </td>
    </tr>
</table>

</body>
</html>

