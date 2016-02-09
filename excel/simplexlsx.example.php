<?php

if (1/*isset($_FILES['file'])*/) {

    require_once "simplexlsx.class.php";
    $xlsx = new SimpleXLSX('country.xlsx'/*$_FILES['file']['tmp_name']*/);

   // echo '<h1>Parsing Result</h1>';
    echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';

    list($cols,) = $xlsx->dimension();
    $f=0;

    foreach( $xlsx->rows() as $k => $r) {

//if ($k == 0) continue; // skip first row
        echo '<tr>';
        for( $i = 0; $i < $cols; $i++){
            $a[] = array_fill($f, 1, $r);
            $f++;
            echo '<td>'.( (isset($r[$i])) ? $r[$i] : '&nbsp;' ).'</td>';}
        echo '</tr>';

    }
    echo '</table>';
}
//$a = array_fill(1, 1, 'erf');
/*print_r($a[0][0][4]);
print_r($a[5][5][4]);
print_r($a[10][10][4]);
print_r($a[0][0][1]);

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
unset($value);
*/
/*Записываем массив из файла в переменную */
$z = 0;
$k=0;
do {
    $b[$k]=$a[$z][$z];
    $z=$z+5;
    $k=$k+1;
} while ($z <=500);
//print_r($b[100][2]);

/*Разделяем ФИО на 3 части, добавляем дату, login, password*/
$w=0;$e=0;
do {
$c[$e]=str_word_count($b[$w][1], 1);
array_push($c[$e],$b[$w][0]);
array_push($c[$e],$b[$w][2]);
array_push($c[$e],$b[$w][3]);
    $w=$w+1;
    $e=$e+1;
} while ($w <=100);
print_r($c[10]);
/*Назначаем именные ключи
$name_key=array('family','name','father_name','date','login','password');
$m=0;
do{
    $name_array_file = array_combine($name_key, $c);
}while($m <=100);

//print_r($name_array_file[1]['date']);*/




$array1 = array(array('a','y','c'), "red", "blue", "red");
$array2 = array(array('a','b','c'),"green", "yellow", "red");
$result = array_diff($array1[0], $array2[0]);
//print_r(count($result));


?>
<!--
<h1>Upload</h1>
<form method="post" enctype="multipart/form-data">
    *.XLSX <input type="file" name="file"  />&nbsp;&nbsp;<input type="submit" value="Parse" />
</form>
-->