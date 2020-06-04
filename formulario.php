<?php

    include 'conecta.inc.php';

    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $cpf=$_POST["cpf"];
    $senha=$_POST["senha"];



    $query= "INSERT INTO cadastrar (nome,email,cpf,senha) VALUES ('$nome','$email','$cpf','$senha');";

    $conectar=mysqli_query($conexao,$query);

    if($conectar){
    	echo "<h1>DADOS ENVIADOS </h1>";
    }else{
    		//echo "<h1>Nao foi possivel enviar os dados </h1><br> <a href="index.php" >Tente Novamente </a>";
    }


?>