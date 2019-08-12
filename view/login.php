
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style media="screen">
    body{
      background-image: linear-gradient(to right top, #284673, #3b6c96, #5593b6, #77bcd6, #9ee5f4)!important;
    }
      .nav-item{
          padding:0 0  0 30px;

      }
      .nav-link{
        color:white!important;
      }
      .jumbotron-main{
        background:rgba( 44, 59, 53, 0.1 )!important;
        width: 25rem !important;
        height: 25rem !important;
        border-radius: 5px!important;
      }
      .painelLogin{
        background-image: url("imagens/Star-Trek-Logo-Login-t.png");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
        margin-left: auto;
        margin-right: auto;
        margin-top: -30px;
        width: 260px;
        height: 270px!important;
        text-align: left;
        color: white;
      }
      .link-login{
        color: white !important;
      }
    </style>
    <?php
    require_once("libs.php");
    ?>
<body class="container-fluid">
<div class="row">
  <div class="col" style="background:rgba(0,0,0,.55); color:white !important;">
    <nav class="navbar navbar-expand-lg" style="padding:10px 0 10px 0;">
    <a class="navbar-brand">
          <img src="imagens/star-trek-icone.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Thoth
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"  >
  <span class="navbar-toggler-icon" style="color:white;">c</span>
</button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent" style=" margin-left:70%;">
         <form class="form-inline my-2 my-lg-0" style=" margin-left: 55%;" hidden>
           <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" >
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">P</button>
        </form>
        <ul class="navbar-nav" style=" margin-left: 0%;">

      <li class="nav-item">
         <a class="nav-link" href="#" hidden>Home</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#" hidden>Controler</a>
      </li>
      <li class="nav-item " >
         <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Entre</button>
      </li>
</form>
    </ul>
  </div>
  </nav>
  </div>
</div>
<main class="col-8 jumbotron text-center jumbotron-main" style="margin-left:auto;margin-right:auto;margin-top:80px; margin-bottom:0;">
  <div class="painelLogin">
    <form>
    <div class="form-group"  >
      <label for="exampleInputEmail1">Logue com Usuário ou E-mail</label>
      <div class="ui"  data-tooltip="A senha deve conter no mínimo 8 caracteres" data-position="right center" >
      <input type="email" class="form-control is-valid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer com acesso" >
      </div>
      <!--
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Please enter a message in the textarea.
      </div>
    -->
    </div>
    <div class="ui divider"></div>

    <div class="form-group">
      <label for="exampleInputPassword1">Senha</label>
      <input type="password" class="form-control  is-invalid" id="exampleInputPassword1" placeholder="Entre com a senha">
<!--
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Please enter a message in the textarea.
      </div>
    -->
  </div>
  <div class="ui divider"></div>
    <div class="form-group" >
      <a href="#" class="form-check-label link-login" for="exampleCheck1">Esqueceu a senha!</a>
    </div>
    <div class="form-group">
     <a  href="#" class="form-check-label link-login" for="exampleCheck2">Criar Conta!</a>
   </div>
   <div class="form-group">
    <button type="submit" class="btn btn-outline-primary  btn-block btn-sm" style="color:white;">Entrar</button>
    <button type="submit" class="btn btn-outline-danger btn-block btn-sm"  style="color:white;">Sair</button>
  </div>
  </form>
  </div>
<!--  <img src="imagens/Star-Trek-Logo-Login-t.png"  width="250" height="250" class="d-inline-block align-top" alt="">-->
<!--<h1 class="display-4">Start</h1>-->
 <!--<p class="lead">Conectar</p>-->
</main>
</body>
</html>
