
<html>
<head>
  <meta charset="UTF-8" />
  <title>Login Professor </title>
 <link rel="stylesheet" href="formulariologin.css" media="screen">
  


</head>

<header>
<div class="header">
  <a href="Professor-Login.html" class="logo"><img src="images/PaidoxRoxoLogo.png" height="80px" width="80px"></a>
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
       <a> <img src="images/Mascote.png" width="90px" height="90px" > </a>
  </footer>  

</body>
</html>