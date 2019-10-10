<?php
 function replycount($topic_id){
 	$db = new Database();
 	$db->query("SELECT * FROM replies WHERE topic_id = :topic_id");
 	$db->bind(':topic_id', $topic_id);
    //assign rows
 	$rows = $db->resultset();
 	//get count
 	return $db->rowCount();
 }
 function getcategories(){
 	$db = new Database;
 	$db->query('SELECT * FROM categories');

 	$resultset = $db->resultset();

 	return $resultset;
 }
 function userpostcount($user_id){
 	$db = new Database;
 	$db->query('SELECT * FROM topic WHERE user_id = :user_id');
 	$db->bind(':user_id', $user_id);
 	$rows = $db->resultset();
 	$topic_count = $db->rowCount();
 	$db->query('SELECT * FROM replies WHERE user_id = :user_id');
 	$db->bind(':user_id', $user_id);
 	$rows = $db->resultset();
 	$reply_count = $db->rowCount();
 	return $topic_count;
 }
?>