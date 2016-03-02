<?php
$data = json_decode(file_get_contents("php://input"));
$id = mysql_real_escape_string($data->id);

mysql_connect("localhost","root","");
mysql_select_db("angularcrud");
mysql_query("delete from tabla where id='".$id."'");

echo " SI";
