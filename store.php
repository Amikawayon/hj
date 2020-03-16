<?php 
include_once ROOT . '/Comments.php';
include_once ROOT . '/Db.php';
$comments = Comments::getComments();






$name='';
$email='';
$msg='';
if ($_POST['hiddenInput']) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];
	Comments::addComment($msg,$email,$name);

	$arrayRes = json_encode(array($msg,$email,$name));
echo $arrayRes;





}

else {
	foreach($comments as $sender) {
echo "<tr><td colspan='2'>$sender[0]</td><td>$sender[1]</td><td>$sender[2]</td></tr>";

}


}
?>