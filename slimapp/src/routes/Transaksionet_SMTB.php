<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//require '../vendor/autoload.php';
//require 'db.php';

$app = new \Slim\App();

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});
$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});
// GET All cutomers
$app->get('/api/Transaksionet_SMTB', function (Request $request, Response $response) {
    $sql = 'SELECT * FROM Transaksionet_SMTB';
	try{
		//Get db Object
		$db = new db();
		//COnnect 
		$db=$db->connect();
		
		$stmt = $db->query($sql);
		$Transaksionet_SMTB = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($Transaksionet_SMTB);
		
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});

// GET Single cutomer
$app->get('/api/Transaksioni_SMTB/{id}', function (Request $request, Response $response) {
	//To get the customer id create variable
	$id = $request->getAttribute('id');
	
    $sql = "SELECT * FROM Transaksionet_SMTB WHERE id = '$id'";
	try{
		//Get db Object
		$db = new db();
		//COnnect 
		$db=$db->connect();
		
		$stmt = $db->query($sql);
		$Transaksioni_SMTB = $stmt->fetch(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($Transaksioni_SMTB);
		
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});


// Add cutomer
$app->post('/api/Transaksioni_SMTB/add', function (Request $request, Response $response) {
	
	$llogariaBurimore_SMTB = $request->getParam('LlogariaBurimore_SMTB');
	$llogariaPranuese_SMTB = $request->getParam('LlogariaPranuese_SMTB');
	$shumaTransaksionit_SMTB = $request->getParam('ShumaTransaksionit_SMTB');
	$valutaTransaksionit_SMTB = $request->getParam('ValutaTransaksionit_SMTB');
	$llojiTransaksionit_SMTB = $request->getParam('LlojiTransaksionit_SMTB');
	$dataTransaksionit_SMTB = $request->getParam('DataTransaksionit_SMTB');
	$statusiTransaksionit_SMTB = $request->getParam('StatusiTransaksionit_SMTB');

	$sql = "INSERT INTO Transaksionet_SMTB (LlogariaBurimore_SMTB, LlogariaPranuese_SMTB, ShumaTransaksionit_SMTB, ValutaTransaksionit_SMTB, LlojiTransaksionit_SMTB, DataTransaksionit_SMTB, StatusiTransaksionit_SMTB) 
	VALUES (:LlogariaBurimore_SMTB, :LlogariaPranuese_SMTB, :ShumaTransaksionit_SMTB, :ValutaTransaksionit_SMTB, :LlojiTransaksionit_SMTB, :DataTransaksionit_SMTB, :StatusiTransaksionit_SMTB)";

	try{
		//Get db Object
		$db = new db();
		//COnnect 
		$db=$db->connect();
		
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':LlogariaBurimore_SMTB', $llogariaBurimore_SMTB);
		$stmt->bindParam(':LlogariaPranuese_SMTB', $llogariaPranuese_SMTB);
		$stmt->bindParam(':ShumaTransaksionit_SMTB', $shumaTransaksionit_SMTB);
		$stmt->bindParam(':ValutaTransaksionit_SMTB', $valutaTransaksionit_SMTB);
		$stmt->bindParam(':LlojiTransaksionit_SMTB', $llojiTransaksionit_SMTB);
		$stmt->bindParam(':DataTransaksionit_SMTB', $dataTransaksionit_SMTB);
		$stmt->bindParam(':StatusiTransaksionit_SMTB', $statusiTransaksionit_SMTB);
		
		$stmt->execute();
		echo'{"notice":{"text":"Te dhenat per transaksionin bankar jane shtuar"}';
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});




// Update cutomer
$app->put('/api/Transaksioni_SMTB/update/{id}', function (Request $request, Response $response) {
	//To get the customer id create variable
	$id = $request->getAttribute('id');
	$llogariaBurimore_SMTB = $request->getParam('LlogariaBurimore_SMTB');
	$llogariaPranuese_SMTB = $request->getParam('LlogariaPranuese_SMTB');
	$shumaTransaksionit_SMTB = $request->getParam('ShumaTransaksionit_SMTB');
	$valutaTransaksionit_SMTB = $request->getParam('ValutaTransaksionit_SMTB');
	$llojiTransaksionit_SMTB = $request->getParam('LlojiTransaksionit_SMTB');
	$dataTransaksionit_SMTB = $request->getParam('DataTransaksionit_SMTB');
	$statusiTransaksionit_SMTB = $request->getParam('StatusiTransaksionit_SMTB');
    $sql = "UPDATE Transaksionet_SMTB SET
	LlogariaBurimore_SMTB = :LlogariaBurimore_SMTB,
    LlogariaPranuese_SMTB = :LlogariaPranuese_SMTB,
    ShumaTransaksionit_SMTB = :ShumaTransaksionit_SMTB,
    ValutaTransaksionit_SMTB = :ValutaTransaksionit_SMTB,
    LlojiTransaksionit_SMTB = :LlojiTransaksionit_SMTB,
    DataTransaksionit_SMTB = :DataTransaksionit_SMTB,
    StatusiTransaksionit_SMTB = :StatusiTransaksionit_SMTB
	WHERE id = '$id'";
	try{
		//Get db Object
		$db = new db();
		//COnnect 
		$db=$db->connect();
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':LlogariaBurimore_SMTB', $llogariaBurimore_SMTB);
		$stmt->bindParam(':LlogariaPranuese_SMTB', $llogariaPranuese_SMTB);
		$stmt->bindParam(':ShumaTransaksionit_SMTB', $shumaTransaksionit_SMTB);
		$stmt->bindParam(':ValutaTransaksionit_SMTB', $valutaTransaksionit_SMTB);
		$stmt->bindParam(':LlojiTransaksionit_SMTB', $llojiTransaksionit_SMTB);
		$stmt->bindParam(':DataTransaksionit_SMTB', $dataTransaksionit_SMTB);
		$stmt->bindParam(':StatusiTransaksionit_SMTB', $statusiTransaksionit_SMTB);
		$stmt->execute();
		echo'{"notice":{"text":"Te dhenat per transaksionin bankar jane perditesuar"}';
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});


// Delete cutomer
$app->delete('/api/Transaksioni_SMTB/delete/{id}', function (Request $request, Response $response) {
	//To get the customer id create variable
	$id = $request->getAttribute('id');
	
    $sql = "DELETE FROM Transaksionet_SMTB WHERE id = '$id'";
	try{
		//Get db Object
		$db = new db();
		//COnnect 
		$db=$db->connect();
		
		$stmt = $db->prepare($sql);
		$stmt->execute();
		echo'{"notice":{"text":"Te dhenat per transaksionin bankar jane fshire"}';
		
	} catch(PDOException $e){
		echo '{"error":{"text": '.$e->getMessage().'}';
	}
});




