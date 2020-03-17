<?php 
include_once ROOT . '/Db.php';
class Comments {

	public static function getComments() {

	$db = Db::getConnection();
	
	$res = $db->query("SELECT * FROM `comments` ");
	


	return $res->fetchAll();
	}


	public function addComment($msg,$email,$name) {
		$db = Db::getConnection();
		$res = $db->prepare("INSERT INTO comments (msg,email,name) "
			. "VALUES (:msg, :email, :name) ");
		$res->bindParam(':msg',$msg,PDO::PARAM_STR);
		$res->bindParam(':email',$name,PDO::PARAM_STR);
		$res->bindParam(':name',$name,PDO::PARAM_STR);
		$res->execute();

			
	}
}


       
