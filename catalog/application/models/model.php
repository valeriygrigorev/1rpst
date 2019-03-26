<?php
// model.php


class Data_base 
{
		public function connect($db_host, $db_user, $db_pass, $db_name)
		{
		//$link = new mysqli ($db_host, $db_user, $db_pass, $db_name);
		$dsn = "mysql:host=$db_host;dbname=$db_name;charset=UTF8";
		
		$link = new PDO($dsn, $db_user, $db_pass); 
		return $link;
		}
		
		public function disconnect($link)
		{
			$link =0;
		}
}

function select()
{
include ('settings_for_db.php');
$db_object = new Data_base;
$link = $db_object->connect($db_host, $db_user, $db_pass, $db_name);
$sql = 'SELECT * FROM catalog';                                                       

$stmt = $link->query($sql);            

$items = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $items[] = $row;
}

$db_object->disconnect($link);
return $items; 	
}

function insert($jenre_book, $author_book, $name_book, $year_book)
{
include ('settings_for_db.php');
$db_object = new Data_base;
$link = $db_object->connect($db_host, $db_user, $db_pass, $db_name);
$sql = "INSERT INTO catalog (id, jenre, author, name, year) VALUES (:id, :jenre, :author, :name, :year)";
$stmt = $link->prepare($sql);
$stmt->bindParam(':id', $idb);
$stmt->bindParam(':jenre', $jenreb);
$stmt->bindParam(':author', $authorb);
$stmt->bindParam(':name', $nameb);
$stmt->bindParam(':year', $yearb);
$idb=0;
$jenreb=$jenre_book;
$authorb=$author_book;
$nameb=$name_book;
$yearb=$year_book;
$stmt->execute();
$db_object->disconnect($link);
}

function update($id_book, $jenre_book, $author_book, $name_book, $year_book){
include ('settings_for_db.php');
$db_object = new Data_base;
$link = $db_object->connect($db_host, $db_user, $db_pass, $db_name);
$sql = "UPDATE catalog SET jenre = :jenre, author = :author, name = :name, year = :year WHERE id = :id";
$stmt = $link->prepare($sql);
$stmt->bindParam(':id', $idb);
$stmt->bindParam(':jenre', $jenreb);
$stmt->bindParam(':author', $authorb);
$stmt->bindParam(':name', $nameb);
$stmt->bindParam(':year', $yearb);
$idb=$id_book;
$jenreb=$jenre_book;
$authorb=$author_book;
$nameb=$name_book;
$yearb=$year_book;
$stmt->execute();
$db_object->disconnect($link);
} 


function del($id_book){
include ('settings_for_db.php');
$db_object = new Data_base;
$link = $db_object->connect($db_host, $db_user, $db_pass, $db_name);
$sql = "DELETE FROM catalog WHERE id = :id";
$stmt = $link->prepare($sql);
$stmt->bindParam(':id', $idb);
$idb=$id_book;
$stmt->execute();
$db_object->disconnect($link);
} 