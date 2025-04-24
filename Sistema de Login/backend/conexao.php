<?php
	try{
		$PDO = new PDO ('mysql:host=localhost;dbname=dtsoft;','root','');
		}catch(PDOException $e){
			echo $e->getMessage();
	}
?>