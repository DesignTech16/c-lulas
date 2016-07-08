<?php

	require_once("session.php");
	require_once('controller/Controllerdiscipulo.php');
	require_once("class.user.php");
	$auth_user = new USER();
	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

<script type="text/javascript" src="bootstrap/css/jquery-3.0.0-jquery.min.js"></script>
<title>MBR12 - Cadastro de Célula</title>
</head>

<body>
<div class="container">
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php"><b>MBR12</b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Cadastro de Célula</a></li>
            <li><a href="cadastro.php">Cadastro de Discípulo</a></li>
            <li><a href="lista.php">Lista de Discípulos</a></li>
			<li><a href="/plus">Chat MBR</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Shalom <?php echo $userRow['user_name']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Ver Perfil</a></li>
                <li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sair</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="clearfix"></div>
   
<div class="container-fluid" style="margin-top:80px;">
    <div class="container">    
    </div>
</div>
	
  <!-- Aqui começa o conteudo -->
<div class="wrapper" role="main">
	<div class="container">
		<div class="row">
			<div id="conteudo" class="col-md-12">
        <div class="row">
            <div class="span12" style="text-align:left; margin: 0 auto;">
  
        <span classe="label"> Relatório de células</span>
				  <hr>
        <form action="controller.php" method="post">
        <b>
       
        
          
          <pre>Data da Célula:  <input type="date" name="datacelula"/></pre>
        <hr>
          <pre>Valor da oferta: <input type="number" name="valoroferta"/></pre>
        <hr>
          
            <pre>Discípulos: <?php $nomeDisc = new Controllerdiscipulo();
                $nome = $nomeDisc->buscarDiscipulos($userRow['user_name']);
                foreach($nome as $nm):?> <input type="checkbox" name="discipulos[]" value="<?=$nm?>"/><?=$nm?><?php endforeach;?> </pre>
           <hr><pre><input type="submit" value="Enviar" class="btn"/></pre>
        <hr>  
        </b>
          </form>
        </div>
      </div>
    
      </div> <!-- Aqui e a area do conteudo -->
			
		</div>
	</div>
</div> <!-- Fim do conteudo -->
	
	
	</div>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>