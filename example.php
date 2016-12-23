<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
/*$str = 'Это строка';
echo mb_substr($str, 0, 10, 'UTF-8');
echo iconv("", "", "Пора переходить на юникод.");*/

if (1/*isset($_FILES['file'])*/) {

    require_once "simplexlsx.class.php";
    $xlsx = new SimpleXLSX('country1.xlsx'/*$_FILES['file']['tmp_name']*/);

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

$z = 0;
$k=0;
do {
    $b[$k]=$a[$z][$z];
    $z=$z+5;
    $k=$k+1;
} while ($z <=1000);
//print_r($b[2][2]);
$fio=array();
$w=0;
while ($w <=200){$fio[$w] = explode(" ", $b[$w][1]); $w=$w+1;};

/*$p=0;
while ($p<3){
print_r($fio[2][$p]);
echo (' ');
$p=$p+1;}*/

include_once 'funk.php';
include_once 'mdb.php';
$login="";
$link=connect();
$rt=150;
echo ($b[197][1]);
while ($rt <500){

    if ($b[$rt][0]>42480){
        $login = "INSERT INTO `lama` (`family`, `name`,`code`,`login`,`password`)
    VALUES ('" . $fio[$rt][0] . "','" . $fio[$rt][1] . "','" . rand(1000, 9999) . "','" . $b[$rt][2] . "','" . $b[$rt][3] . "')";
//$res = $link->query($login);

    }
    else{};
    $rt=$rt+2;
}



/*$login = "INSERT INTO `lama` (`family`, `name`,`code`,`login`,`password`)
    VALUES ('" . $fio[4][0] . "','" . $fio[4][1] . "','" . rand(1000, 9999) . "','" . $b[4][2] . "','" . $b[4][3] . "')";
$res = $link->query($login);*/

/*echo ($b[4][0]);
echo ('<br>');
$date = date_create();
echo date_timestamp_get($date);
print_r($date);

echo ('<br>');
$date = new DateTime();
echo $date->getTimestamp();
echo ('<br>');
$ts = date_timestamp_get($date);
$date = new DateTime("@$ts");*/
//echo $date->format('U = Y-m-d') . "\n";




/*$fio = explode(" ", $b[196][1]);
echo $fio[0]; // piece1
echo ('<br>');
echo $fio[1]; // piece2
echo ('<br>');
echo $fio[2]; // piece2
*/

$array1 = array(array('a','y','c'), "red", "blue", "red");
$array2 = array(array('a','b','c'),"green", "yellow", "red");
$result = array_diff($array1[0], $array2[0]);
//print_r(count($result));


?>
