<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <style type="text/css">
        table {
            border-collapse: collapse; /* Убираем двойные линии между ячейками */
            width: 600px; /* Ширина таблицы */
        }
        th {background: #fc0;}
     </style>

</head>
<body>

<form method="post" action="otc12b.php" >
    <b>Период проведения инструктажей</b><br>

    <select name="place" style="width: 244px">
        <option value="">Выберите из списка</option>
        <option value="2016-04%">2016 Апрель</option>
        <option value="2016-05%">2016 Май</option>
        <option value="2016-01%">2016 Январь</option>
        <option value="2016-02%">2016 Февраль</option>
        <option value="2016-03%">2016 Март</option>

    </select><br><br>
    <input type="submit" value="Показать" class="table-form" /><br>

</form><br>
<script>debugger;</script>
<?php
    include_once ("funk.php");
    if ($_POST['place']==='2016-05%'){$data='Май 2016г.';}
    else if ($_POST['place']==='2016-01%'){$data='Январь 2016г.';}
    else if ($_POST['place']==='2016-02%'){$data='Февраль 2016г.';}
    else if ($_POST['place']==='2016-03%'){$data='Март 2016г.';}
    else if ($_POST['place']==='2016-04%'){$data='Апрель 2016г.';}
    else {};

    echo ('<b>Места инструктирования сотрудников за  '.$data.' </b><br>');
    $names[0]="Офис на ул.Кулагина";
    $names[1]="ТЦ Мармелайт";
    $names[2]="Офис на ул.Ленина";
    $names[3]="ТЦ Мирамикс";
    $names[4]="ТЦ Изумрудный город";
    $names[5]="Офис на ул.Карташова";
        function print_table ($name_place){
            echo('<table border="2"><tr ><th colspan="3">'.$name_place .'</th></tr>');

            $link=connect();
            $login= "SELECT * FROM `lama` WHERE date_test LIKE '".$_POST['place']."' AND `place` = '".$name_place."'";
            $res = $link->query($login) ;
            $i=1;
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

            echo('</table><br>');
        }
    $i=0;
    while ($i <=5 ) {
        print_table($names[$i]);
        $i=$i+1;

    }
?>

<?php
//echo ('hello');
$list = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
?>
</body>
</html>

