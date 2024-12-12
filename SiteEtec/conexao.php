<?php
	$servidor="localhost";
	$banco="bdetec";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		
?>	    