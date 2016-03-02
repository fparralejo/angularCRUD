<?php
mysql_connect("localhost","root","");
mysql_select_db("angularcrud");
$stmt = mysql_query("select * from tabla");

$list = '';
while($row=mysql_fetch_array($stmt)){
    $reg='';
    foreach($row as $propiedad=>$valor){
        if(!is_numeric($propiedad)){
            $reg[$propiedad]=$valor;
        }
    }
    $list[] = $reg;
}



echo json_encode($list);