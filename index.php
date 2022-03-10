<?php 
$host='bd';
$db_name = 'institut';
$db_uset = 'root';
$db_pas = '123';

try{
	$db = new PDO('mysql:host'.$host.'dbname='.$db_name, $db_user, $db_pas);
}

catch(PDOException $e){

	print"Error!: ".$e->getMessage();
	die();

}

$stmt = $db->query("SLECT S.ID, S.SURNAME, JOIN `GROUPS` AS G ON S.ID_GROUP=G.ID;");

while ($row = $stmt->fetch()) {
	echo $row['SURNAME'] . '<br>'
}





?>
