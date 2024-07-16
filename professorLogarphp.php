  
<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>

<html>
<head>
  <meta charset="UTF-8" />
 
  <title>Login Professor </title>
  <link rel="icon" href="images/iconePaidox.jpeg" />
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
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="POST"> 
          <h1 class="h1login">Login</h1> 
          <p> 
            <label for="email_login">e-mail</label>
            <input  name="email" type="email" placeholder="ex. souza@gmail.com"/>
          </p>
           
          <p> 
            <label for="senha_login">Senha</label>
            <input  name="senha" type="password" placeholder="ex. xxxxxxxx" /> 
          </p>
           
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="cadastrar.php">Cadastre-se</a>
          </p>
        </form>
      </div>
 

<footer class="footerlogin">
       <a> <img src="images/Mascote.png" width="95px" height="95px" > </a>
  </footer> 

<?php
if (isset($_POST['email']))
{
 $email = addslashes($_POST['email']);
 $senha = addslashes($_POST['senha']);
 
 //verificar se esta preenchido
 if(!empty($email) && !empty($senha))
 {
	$u->conectar("projeto_loginprofessor","localhost","root","");
	  if ($u->msgErro =="") // esta tudo certo
	  {
       if($u->logar($email,$senha))
	   {
		header("location: professorpagina.html");
	   }else
	   {
		   	?>
			<div id="msg-erro" style=" border-radius: 10px; padding: 10px;margin: 30px; background-color: rgba(250,128,114,.8);  position: absolute; left:10px; top: 350px;">
			
			 <a style="color: white;">Email e/ou Senha estão incorretos!</a>
			 
			</div>
			<?php
		   
	   }
	  }else
	  {
		  echo "Erro:".$u->msgErro;
	  }
 }else
 {
	 ?>
			<div id="msg-erro" style=" border-radius: 10px; padding: 10px;margin: 30px; background-color: rgba(250,128,114,.8);  position: absolute; left:10px; top: 350px;">
			
			 <a style="color: white;">preencha todos os campos!</a>
			 
			</div>
			<?php
 }
}
?>  

</body>
</html>