<?php 
include_once dirname(__FILE__) . '/Comments.php';

$name='';
$email='';
$msg='';


	$name = $_POST["name"];
	$email = $_POST["email"];
	$msg = $_POST["msg"];
	

	$arrayRes = json_encode([$msg,$email,$name]);


echo($arrayRes);
Comments::addComment($msg,$email,$name);







?>