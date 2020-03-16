<?php 
include_once ROOT . '/Comments.php';








// $name='';
// $email='';
// $msg='';
if (isset($_POST["hidden"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$msg = $_POST["msg"];
	Comments::addComment($msg,$email,$name);

	$arrayRes = json_encode([$msg,$email,$name]);

echo $arrayRes;


}

else {
	$comments = Comments::getComments();
	foreach($comments as $sender) {
echo "<tr><td colspan='2'>$sender[0]</td><td>$sender[1]</td><td>$sender[2]</td></tr>";

}


}
?>