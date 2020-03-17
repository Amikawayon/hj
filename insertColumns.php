<?php 
include_once ROOT . '/Comments.php';

$comments = Comments::getComments();
	foreach($comments as $sender) {
echo "<tr><td colspan='2'>$sender[0]</td><td>$sender[1]</td><td>$sender[2]</td></tr>";
}