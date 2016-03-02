<?php
$data = json_decode(file_get_contents("php://input"));
$id = mysql_real_escape_string($data->id);
$name = mysql_real_escape_string($data->name);
$price = mysql_real_escape_string($data->price);
$quantity = mysql_real_escape_string($data->quantity);

mysql_connect("localhost","root","");
mysql_select_db("angularcrud");
mysql_query("insert into tabla (id,name,price,quantity) values ('".$id."','".$name."','".$price."','".$quantity."')");

echo " SI";
