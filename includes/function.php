<?php
// function connectToDb($hostname,$username,$password)
// {
// 	try {
//    return new PDO("mysql:host=$hostname;dbname=forum",$username,$password);
//    } catch (PDOException $e) {
//      die($e->getMessage());
//    }
// }
// function fetchAllCatergries($PDO){
//    $sql=$PDO->prepare('select * from categories');
//   //execute query
//    $sql->execute();
//    normal way
//    // $categories=$sql->fetchALL(PDO::FETCH_OBJ);
//    /*with classes*/
//    return $sql->fetchALL(PDO::FETCH_CLASS,'Categorie');
// }
function dd($data){
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}