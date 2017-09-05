<?php

$mysqli = new mysqli('localhost','root','','tutorial');

if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

/*
CREATE TABLE `articles` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keys` json DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB
*/

$array = [
			'your',
			'json',
			'is',
			'here'

			
			];
			
class Test {
	public $one = 1;
	public $two = 2;
	public $three = 3;
	public $four = 4;
	public $five = array('value1','value2');
}

$obj = new Test;

$array = [
			'one',
			'key'=>'value',
			$obj,
			['six','seven','eight'],
			'five'
			];			

//$data = json_encode($array);
$data = json_encode($array);

$sql = "INSERT  INTO `articles` (`title`,`keys`) VALUES (
														'Article fios',
														'".$data."'
														)";
$mysqli->query($sql);

//$sql = "SELECT * FROM `articles` WHERE JSON_CONTAINS(`keys`,JSON_OBJECT('one',1,'two',2))";	
//sql = "SELECT JSON_EXTRACT((SELECT `keys` FROM `articles` WHERE `id` = 4),'$.*.five[1]') as title";	
//sql = "SELECT JSON_EXTRACT((SELECT `keys` FROM `articles` WHERE `id` = 4),'$.*.five[1]') as title";	

//$sql = "SELECT `title`,`keys`->'$.*.five' AS `key` FROM `articles`";	
$sql = "SELECT `title`,`keys` AS `key` FROM `articles` WHERE `keys`->'$.*.five[1]' IS NOT NULL";	

$result = $mysqli->query($sql);													

foreach ($result->fetch_all(MYSQLI_ASSOC) as $row) {
	
	echo $row['title'] .' | '.$row['key'].'<br />';
}
