<!DOCKTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<!--titulo da página-->
	<title> minha pagina </title>
	<!--link do CSS-->
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<!--link para o bootstrap-->
	<link href="public/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	  
	 body{
		 overflow-x: hidden;
	 }
	
    </style>
<body>
<!-- javascript ----------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!------------------------------------------- Logo, barra pesquisa, carrinho, entrar cadastrar ----------------------------------------------------->

<header class="blog-header py-3">
	<div class="row flex-nowrap justify-content-between align-items-right">
			<div class="col-7 pt-0 text-left">
				<h2>Prime Shirts</h2>
			</div>
	<div class="col-2 text-left">
		<input type="text" class="form-control" placeholder="Senha">
		<a href="cadastro.php">Cadastre-se</a>
	</div>
<!---------------------------------------------modal cadastro---------------------------------------------------->			
	<div class="col-2 text-left">
		<input type="text" class="form-control" placeholder="Senha" >
		<a data-toggle="modal" data-target="#exampleMod" data-whatever="@mdo" href="#">Esqueceu senha</a>
				
		<div class="modal fade" id="exampleMod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
		<div class="container-fluid">
			<div class="modal-body">
				<form class="needs-validation" novalidate>
		<div>
			<center>
				<text><p>identifique-se para receber um e-mail com as instruções e o link para criar uma nova senha.</p></text>
			</center>
		</div>
			  
		<div class="form-row">
			<div class="col-md-12 mb-3">
				<div align="left" label for="validationTooltip01">E-mail</label></div>
				<input type="text" class="form-control" id="validationTooltip01" required>
			</div>
		</div>
			
		<div align="center">
			<div class="modal-footer" >
				<button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button>
			</div>
		</div>
		
			</div>
		</div>
			</div>
			</div>
		</div>
	</div>
	
		<div class="col-1 ">
			<a button type="submit" class="btn btn-primary btn-block" href="menuLogado.php">Entrar</button></a>
		</div> 
	</div>	

<!----------------------------------------   MENU ----------------------------------------->
<div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="menuDeslogado.php">Inicio </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
		  <li class="nav-item">
			<a class="nav-link" href="Escolher-modelo.php">Personalizar Camisetas <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="VisualizarCamisa.php">Camiseta dos Criadores</a>
		  </li>
		</ul>
	  </div>
	</nav></br>
</div>
</body>
<!-------------------------------- meio da página ------------------------------------------->
<header>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
<nav class="navbar navbar-expand-lg navbar-light submenu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="submenu collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Modelo <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Estampa</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tamanho Camiseta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">P</a>
          <a class="dropdown-item" href="#">M</a>
          <a class="dropdown-item" href="#">G</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<br>	


    </div>
    <div class="col-md-6">
      <img src="imagens/camiseta1.png" height="500" width="640" style="border: #000000 Solid 2px;">
	  <br>
	 <div align="left">
	 <br>
		<button type="button" class="btn btn-danger">Cancelar</button>
		<button type="button" class="btn btn-success" style="float: right;">Comprar</button>
    </div>
  </div>
</div>
</br>
</header>
<!--------------------------------- rodapé -------------------------------------------------->
<footer class="section footer-classic context-dark bg-image" style="background:#222222;">
        <div class="container-fluid">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"></a>
                <p class="color">Trabalho para FAPI, sem valor comercial.</p>
                <p class="color rights"><span>©  </span><span class="color copyright-year">2019</span><span> </span><span>Camisetas Personalizadas</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5 class="color" >Contato</h5>
              <dl class="color contact-list">
                <dt>Endereço:</dt>
                <dd>Avenida Camilo di Lellis, 1151-Pinhais/PR</dd>
              </dl>
              <dl class="color contact-list">
                <dt>Email:</dt>
                <dd><p>camisetapersonaliza@gmail.com</p></dd>
              </dl>
              <dl class="color contact-list">
                <dt>Telefones:</dt>
                <dd><p>(41) 3333-3333<p>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-2">
              <h5 class="color">Redes Sociais</h5>
              <ul>
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-google"></a></li>
				<li><a href="#" class="fa fa-linkedin"></a></li>
				<li><a href="#" class="fa fa-instagram"></a></li>
              </ul>
            </div>
          </div>
        </div>
 </footer>
 </html>