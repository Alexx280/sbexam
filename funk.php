<?php
//session_start();
//Определение IP адреса комппьютера
function GetRealIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

// Выбор файла для подключения
function getfile(){
    $komp="";
    $komp=GetRealIP();
    $namekomp= gethostbyaddr($komp);

    if ($namekomp !="sbexam") {  //  выбираем файл
        $config = parse_ini_file('config/1connect.ini', true);
    }
    else
    {
        $config = parse_ini_file('config/config.ini', true);
    }
    return $config;
}
// Подключеие к базе
function podkl($config){

    $pod =new mysqli($config["database"]["host"], $config["database"]["username"], $config["database"]["password"],$config["database"]["name"]);
    $pod->query("SET NAMES utf8");
    return $pod;
}

function connect(){
    $config=getfile();
    $link =podkl($config);
    return $link;}

function insert ($table, $values)
{
    foreach ($values as $key => $item) {
        $col = $col.$key.', ';
        $zna = $zna.'"'.$item. '", ';
    }
    $col=substr($col, 0, strlen($col)-2);
    $zna=substr($zna, 0, strlen($zna)-2);

    $query="INSERT INTO " . $table . " (" . $col . ") VALUES (" . $zna . ")";   //'INSERT INTO bam_users (name, family, e_mail, login, password) VALUES ("'.$fn.'","'.$sn.'","'.$em.'","'.$lo.'","'.$pa.'")'
    return $query;
}
function select($cols=array("*"), $table, $where)
{
    $cols_string = "";
    global $db;
    if (empty($cols)) {
        $cols_string = "*";
    } else {
        foreach ($cols as $item) {
            $cols_string .= $item . ",";
        }
    }
    if ($where == "") {
        $where = "1=1";
    }

    $query = "SELECT " . $cols_string . " FROM " . $table . " WHERE " . $where;

    $temp = $db->mquery($query, array());

    return $temp;
}

function check ($family, $pasp_s){
    global $link;
    $link=connect();
    $res = $link->query("SELECT * FROM `lama` WHERE `family`= '$family' AND `pasp_s` ='$pasp_s' ");
    if ($res->fetch_assoc()) return $res;
    else {
        return false;
           }
    }



Class link_
{
    function m_query($query, $value = array())
    {
        $pieces = explode('?', $query);
        $entry = sizeof($pieces);
        if ($entry > 0) {
            $query = '';
            $i = 0;
            foreach ($pieces as $piece) {
                $value_current = $value[$i];
                $query .= $piece . $value_current;
                $i++;

            }
        }

        if ($result = $this->$link->query($query)) {

           if (!is_object($result)) {
                return $this->$link->insert_id;
            }
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
}
$link= new link_;
?>

