<?php

include_once ("funk.php");

$link=connect();

$login= "SELECT * FROM `lama` WHERE family= '".$_POST['family']."'";
$res = $link->query($login) ;
while($row = $res->fetch_assoc()){
$family = $row['family'];
$name_user = $row['name'];
$father_name_user = $row['father_name'];
$date_test = $row['date_test'];
$zachet = $row['zachet'];

echo ($family.' '.$name_user.' '.$father_name_user. '   - '.$zachet.' '.$date_test.' <br>' );
$login1= "UPDATE `lama` SET `see`=000 WHERE family= '".$_POST['family']."'";
$res = $link->query($login1) ;
}
?>

<!DOCTYPE HTML>
<html>
<head>
  <!--  <link href="jquery-ui-1.10.4.custom/css/le-frog/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css"/>
    <script src="jquery.js"></script>
    <script src="jquery-ui-1.10.4.custom/js/jquery-ui-1.8.js"></script>
    <style type="text/css">
        .ui-draggable
        {
            padding:15px;
            border: 1px solid;
            width:130px;
            height:100px;
        }
        .ui-draggable-dragging
        {
            background-color:#ecbfda;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {

            $("div").draggable();

        });
    </script>
-->

</head>
<body>
<!--<div class="ui-widget ui-corner-all">Hello </div>-->
<form method="post" action="ZZ.php" >
    Фамилия:<br>
    <input type="text" id="fa" name="family" size="30" required="required"  title="введите фамилию" ><br><br>
    <input type="submit" value="Получить полное имя" class="table-form" />

</form>


</body>
</html>
