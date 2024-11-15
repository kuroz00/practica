<?php
include("connection.php");
function all($sede){
	switch($sede){
		case "PUQ":
			$con = connection();
			$stmt = $con->prepare("SELECT * FROM llamadas");
		    $stmt->execute();
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		    break;
		case "PNT":
			$con = connection();
			$stmt = $con->prepare("SELECT * FROM llamadaspnt");
    		$stmt->execute();
    		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>