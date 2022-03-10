<?php
$host = 'db';
$db_name = 'institut';
$db_user= 'root';
$db_pas = '123';
 
try {
	$db=new PDO ('mysql:host='.$host.';dbname='.$db_name, $db_user, $db_pas);
}	catch (PDOException $e){
	print "Eroor!: ".$e->getMessage();
	die();
}

$result = '{"STUDENTS":[';
$stmt = $db->query ("SELECT s.ID,s.SURNAME, `s`. `NAME`, g.TITLE AS GR FROM 
`STUDENTS` AS s JOIN `GROUPS` AS g on s.ID_GROUP=g.ID;");

while ($row = $stmt->fetch()){
	$result .= sprintf('{"id":%d,"SURNAME":"%s", "NAME":"%s", "GROUPS":"%s"},',$row[
	'ID'],$row['SURNAME'],$row ['NAME'], $row['GR']);

}

$result = rtrim($result,",");
$result .=']}';

echo $result; 


?>
