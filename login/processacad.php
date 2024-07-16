<?php
require_once 'CLASSES/usuarios.php';
//verificar se clicou no botao
isset($_POST['nome'])
{
 $nome = addslashes($_POST['nome']);
 $nascimento = addslashes($_POST['nascimento']);
 $email = addslashes($_POST['email']);
 $senha = addslashes($_POST['senha']);
 
 //verificar se esta preenchido
 if(!empty($nome) && !empty($nascimento) && !empty($email) && !empty($senha))
 {
	require 
 }
 
 else
 {
	 echo"Preencha todos os campos";
 }
}

?>