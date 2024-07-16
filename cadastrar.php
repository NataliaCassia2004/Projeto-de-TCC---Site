  
 <?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>

<html>
<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="images/iconePaidox.jpeg" />
  <title>Cadastro Professor </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <link rel="stylesheet" href="formulariologin.css" media="screen">
  


</head>

<header>
<div class="header">
  <a href="Professor-Login.html" class="logo"><img src="images/PaidoxRoxoLogo.png" height="90px" width="90px"></a>
  <div>
    <a class="Linkpagina" href="Página-Inicial.html">Página Inicial</a>
  </div>
</div>
 </header>
 <body>

  <div class="container" >
   
     
    <div class="content">
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="POST"> 
          <h1 class="h1login">Cadastro</h1> 
           
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input  name="nome" type="text" placeholder="nome" />
          </p>
           
		   
		   <p> 
            <label for="nascimento_cad"> data de nascimento </label>
            <input  name="nascimento" required="required"  placeholder="xx/xx/xxxx"/> 
          </p>
		  
          <p> 
            <label for="email_cad"> e-mail</label>
            <input  name="email" type="email" placeholder="ex. souza@gmail.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Senha</label>
            <input name="senha"  type="password" placeholder="ex. xxxxxxxxx"/>
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="professorLogarphp.php"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>





<footer class="footerlogin">
       <a> <img src="images/Mascote.png" width="95px" height="95px" > </a>
  </footer>  
  
  <?php
//verificar se clicou no botao
if (isset($_POST['nome']))
{
 $nome = addslashes($_POST['nome']);
 $nascimento = addslashes($_POST['nascimento']);
 $email = addslashes($_POST['email']);
 $senha = addslashes($_POST['senha']);
 
 //verificar se esta preenchido
 if(!empty($nome) && !empty($nascimento) && !empty($email) && !empty($senha))
 {
	$u->conectar("projeto_loginprofessor","localhost","root","");
	if ($u->msgErro =="") // esta tudo certo
	{
		if($u->cadastrar($nome,$nascimento,$email,$senha))
			
		{
			?>
			<div id="msg-sucesso" style="border-radius: 10px; padding: 10px;margin: 30px; background-color: rgba(50,205,50,.8);  position: absolute; left:10px; top: 350px;">
			 <a style="color: white;"> cadastrado com sucesso! Acesse para entrar.</a>
			</div>
			<?php
	    }
		else
		{
			?>
			<div id="msg-erro" style=" border-radius: 10px; padding: 10px;margin: 30px; background-color: rgba(250,128,114,.8);  position: absolute; left:10px; top: 350px;">
			
			 <a style="color: white;">Email já cadastrado!</a>
			 
			</div>
			<?php
		}
		
	}
	else
	{
		echo "Erro:".$u->msgErro;
	}
 }
 else
 {
	        ?>
			<div class="msg-erro" style=" border-radius: 10px; padding: 10px;margin: 30px; background-color: rgba(250,128,114,.8);  position: absolute; left:10px; top: 350px;">
			  <a style="color: white;"> Preencha todos os campos </a>
			</div>
	       <?php
 }
}
?>
</body>
</html>