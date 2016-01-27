<?php
include_once 'head1.tpl';
include_once 'mdb.php';
include_once 'funk.php';
$login="";

$link=connect();
/*внесение пользователя в базу*/

if($_POST['parol-na']=='gigabite8srx') {
    $login = "INSERT INTO `lama` (`family`, `name`,`code`)
    VALUES ('" . $_POST['family'] . "','" . $_POST['name'] . "','" . rand(1000, 9999) . "')";

    if ($_POST['family'] != '') {
        $res = $link->query($login);
    } else { };
}
else {};
//echo ($_POST['date_input']);

/*проверка наличия сотрудника в базе*/
if($_POST['parol']=='gigabite8srx') {
    $input = "SELECT * FROM `lama` WHERE `family` = '" . $_POST['fam'] . "'";

//if ($_POST['fam'] != '') {
    //  $res = $link->query($input) ;}
//else {};
//$input= "SELECT * FROM `lama` WHERE `date_input` = '".date('Y-m-d')."'";
//$input= "SELECT (`family`, `name`) FROM `lama` WHERE `date_test` ='".date('Y-m-d')."'";
//echo $input;
//if ($_POST['family'] != '') {
    /*    while($res = $link->query($input)){
            $row=$res->fetch_assoc();
            var_dump($row);
        }*/
    $res = $link->query($input);
    while ($row = $res->fetch_assoc()) {
        //var_dump($row['family'],$row['name']);
        foreach ($row as $key => $val) {
            if ($key == 'family' || $key == 'name' || $key == 'zachet' || $key == 'code') {
                echo "$val\n";
            }
        }
    }
}
else {};

//else {};

?>

<script>
    /*var obl = document.getElementById("edu")
    // обработчик без аргументов
    function doSomething() {
        alert("Проверка")
    }
    obl.onclick = doSomething;
*/
</script>

<script src="function.js" type="text/javascript"></script>
<div id='centr-w'>
    <div id='centr'>
        <form method="post" action="#">
            Фамилия:<br>
            <input type="text" id="fa" name="family" size="30" required="required" ><br>
            Имя:<br>
            <input type="text" id="na" name="name" size="30" required="required" ><br><br>
            <input type="password" id="na" name="parol-na" size="10" required="required"  ><br>

            <br>
            <input type="submit" value="Внести в базу" class="table-form"/>

        </form>
        </br>
        <form method="post" action="test.php">
            <input type="submit" value="Тестирование" class="table-form"/>
            </br>
            </br>
        </form>
        <form method="post" action="index.php">
            <input type="submit" value="Обучение" class="table-form"/>
            </br>
            </br>
        </form>
        <!--<form onclick="setupMessageButton('Добавлено:', '$input')" >
            <input type="button" class="table-form" value="Добавленные сегодня" />
            </br>
            </br>
        </form>-->
        <form method="post" action="#">
            Фамилия:<br>
            <input type="text" id="da" name="fam" size="10" required="required"  ><br><br>
            <input type="password" id="day" name="parol" size="10" required="required"  ><br>
            <br>
            <input type="submit" value="Проверить в базе" class="table-form"/>
        </form>

    </div>

</div>
<script>
    //document.getElementById('centr').innerHTML = 'City';
   // var str = document.getElementById("centr");
    // обработчик без аргументов
    //function doSome() {
   //     str.innerHTML = 'City';
    //}
   // str.onclick = doSome;
    /*var newDiv = document.createElement('div');
    newDiv.className = 'my-class';
    newDiv.id = 'my-id';
    newDiv.style.backgroundColor = 'red';
    newDiv.style.width = '250px';
    newDiv.style.height = '100px';
    newDiv.innerHTML = 'Привет, мир!';
    centr.appendChild(newDiv);*/
</script>