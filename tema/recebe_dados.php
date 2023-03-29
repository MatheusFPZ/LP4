<?php


	$data = $_POST["data"];
	$nome = $_POST["nome"]; 
	$bio = $_POST["bio"];
	$curso = $_POST["curso"];
	$sexo = $_POST["sexo"];
	$hora = $_POST["hora"];
	$idade = $_POST["idade"];
	$linguagens = $_POST["lp"];

	
	

	
	echo "Nome: ".$nome.'<br>';
	echo "bio: ".$bio.'<br>';
	echo "Curso: ".$curso.'<br>';
	echo "Data: ". $data. '<br>';
	echo "Sexo: ".$sexo.'<br>';
	echo "Hora: ".$hora. '<br>';
	echo "Idade: ".$idade. '<br>';
	echo "Linguagens: "; 
	foreach($linguagens as $linguagem){
		echo "$linguagem".'<br>';
		
	}
	
	
?>