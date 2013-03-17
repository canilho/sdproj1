<?php 
include("header.php");

$sql="INSERT INTO utilizador(idUtilizador,nome,bilhete_identidade,password,mail,telefone,Universidades_id_universidade) 
VALUES( null, 'ac', 1234567, 'kjhgfasda', ' aifoagsdoa', 098765124, 61732 )";

$_paginas = "";
$query_paginas = mysql_query("select * from utilizador");
$result = @mysql_query($sql);
//Check whether the query was successful or not
if($result) {
header("location: index.php");
exit();
}else {
die("Query failed");
}
?>