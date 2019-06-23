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
<div>

		<div class="row flex-nowrap justify-content-between align-items-right">
			<div class="col-10 pt-0 text-left">
				<h2>Prime Shirts</h2>
			</div>
			<div class="col-2 text-right">
			<span class="mds">Olá, nome.<span>
				 <img src="imagens/avatar.jpg" height="80" width="80" style="border: #000000 Solid 1px;">
				
			</div>
		</div>

<div align="right">
<a href="#">Sair</a>
</div>
</div>
	<!----------------------------------------   MENU ----------------------------------------->
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

	
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
	  <li class="nav-item">
  <a class="nav-link " href="menuLogado.php">Inicio </a>
  </li>
      <li class="nav-item">
        <a class="nav-link" href="Escolher-modelo.php">Personalizar Camisetas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="VisualizarCamisa.php">Camiseta dos Criadores</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="camisetaspersonalisadas.php">Minhas criações</a>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opções
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="alterarCadastro.php">Alterar cadastro</a>
          <a class="dropdown-item" href="redefinirSenha.php">Mudar senha</a>
        </div>
      </li>
      	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opções adm
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="incluir adm.php">incluir adm</a>
          <a class="dropdown-item" href="avaliarCamisetas.php">Avaliar criações</a>
		  <a class="dropdown-item" href="gerenciamentoDeVendas.php">Gerenciar vendas</a>
        </div>
		</li>
		<li class="nav-item dropdown">
		 <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownC" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opções Criador
        </a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdownC">
          <a class="dropdown-item" href="Criações.php">Criações</a>
          <a class="dropdown-item" href="Lucroi.php">Vendas</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</br>
</div>
</body>
<!-------------------------------- meio da página ------------------------------------------->
<div  class="container-fluid" style="height:90%">
<div class="row">

  <div class="col-9">
<div  class=" container border-dark ">

		<center>
		<figure class="figure ">
		<img src="imagens/camisetapreta.png" width="198" height="200" class="figure-img img-fluid rounded float-left">
		<figcaption class="figure-caption">
		<center>
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Ver detalhes" data-target="#Detalhes">
		<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Ponto_de_exclama%C3%A7%C3%A3o_da_RedeTV%21.svg" width="25" height="25">
		</button>
		
		<!-- Modal -->
		
<div class="modal fade" id="Detalhes" tabindex="-1" role="dialog" aria-labelledby="Detalhes" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title font-weight-bold">Detalhes</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	 
	  <div class="container">
  <div class="row">
    <div class="col">
     	   <img src="imagens/camisetapreta.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
    </div>
    <div class="col">
	<H5 class="text-center text-monospace"> Camiseta Preta </H5>
      <p class="text-center text-monospace">
	  Camiseta preta Toppem, lisa basica.
	  </p>
    </div>
  </div>
  </div>
	  
	 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		</div>
      </div>
    </div>
  </div>
</div>


<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Solicitar avaliacao" data-target="#Avaliacao">
		<img src="https://image.flaticon.com/icons/png/512/33/33280.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Avaliacao" tabindex="-1" role="dialog" aria-labelledby="Avaliacao" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Solicitar avaliação</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="row">
    <div class="col">
        <img src="imagens/camisetapreta.png" width="200" height="200" class="figure-img img-fluid rounded float-left" >
	</div>
	<div class="col">
	<p class="text-center text-monospace">
	Deseja realmente enviar essa camiseta para avaliação dos administradores?
	</p>
	</div>
	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar solicitação</button>
      </div>
    </div>
  </div>
</div>
		
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Excluir" data-target="#Excluir">
		<img src="https://image.flaticon.com/icons/png/512/39/39220.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Excluir" tabindex="-1" role="dialog" aria-labelledby="Excluir" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Excluir</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-monospace">
	Deseja mesmo excluir essa camiseta?
	  </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary"data-dismiss="modal">Sim</button>
      </div>
    </div>
  </div>
</div>
		</center>
		</figcaption>
		</figure>
		&nbsp;&nbsp;&nbsp;
		<figure class="figure">
		<img src="imagens/badbranca.png" width="200" height="200" class="figure-img img-fluid rounded float-left"  >
		<figcaption class="figure-caption">
		<center>
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Ver detalhes" data-target="#Detalhes2">
		<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Ponto_de_exclama%C3%A7%C3%A3o_da_RedeTV%21.svg" width="25" height="25">
		</button>
		
		<!-- Modal -->
		
<div class="modal fade" id="Detalhes2" tabindex="-1" role="dialog" aria-labelledby="Detalhes" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title font-weight-bold">Detalhes</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	 
	  <div class="container">
  <div class="row">
    <div class="col">
     	   <img src="imagens/badbranca.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
    </div>
    <div class="col">
	<H5 class="text-center text-monospace"> Camiseta Brnca com logo badgers </H5>
      <p class="text-center text-monospace">
	  Camiseta branca estampada com Badgers, é uma peça muito estilosa 
	  sem deixar de ser discreta.
	  </p>
    </div>
  </div>
  </div>
	  
	 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		</div>
      </div>
    </div>
  </div>
</div>


<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Solicitar avaliacao" data-target="#Avaliacao2">
		<img src="https://image.flaticon.com/icons/png/512/33/33280.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Avaliacao2" tabindex="-1" role="dialog" aria-labelledby="Avaliacao" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Solicitar avaliação</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	    <div class="row">
    <div class="col">
  <img src="imagens/badbranca.png"" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
	</div>
	<div class="col">
	<p class="text-center text-monospace">
	Deseja realmente enviar essa camiseta para avaliação dos administradores?
	</p>
	</div>
	</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar solicitação</button>
      </div>
    </div>
  </div>
</div>
		
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Excluir" data-target="#Excluir2">
		<img src="https://image.flaticon.com/icons/png/512/39/39220.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Excluir2" tabindex="-1" role="dialog" aria-labelledby="Excluir" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Excluir</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-monospace">
	Deseja mesmo excluir essa camiseta?
	  </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary">Sim</button>
      </div>
    </div>
  </div>
</div>
		</center>
		</figcaption>
		</figure>
			&nbsp;&nbsp;&nbsp;
<!--------------------------------->		
		<figure class="figure">
		<img src="imagens/mangaCompridaBranca.png" width="205" height="200" class="figure-img img-fluid rounded float-left" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure." >
		<figcaption class="figure-caption">
		<center>
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Ver detalhes" data-target="#Detalhes3">
		<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Ponto_de_exclama%C3%A7%C3%A3o_da_RedeTV%21.svg" width="25" height="25">
		</button>
		
		<!-- Modal -->
		
<div class="modal fade" id="Detalhes3" tabindex="-1" role="dialog" aria-labelledby="Detalhes" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title font-weight-bold">Detalhes</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	 
	  <div class="container">
  <div class="row">
    <div class="col">
     	   <img src="imagens/mangaCompridaBranca.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
    </div>
    <div class="col">
	<H5 class="text-center text-monospace"> Camiseta Branca </H5>
      <p class="text-center text-monospace">
	  Camiseta branca de manga comprida, para te deixar no estilo,
	  e aquecido!
	  </p>
    </div>
  </div>
  </div>
	  
	 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		</div>
      </div>
    </div>
  </div>
</div>


<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Solicitar avaliacao" data-target="#Avaliacao3">
		<img src="https://image.flaticon.com/icons/png/512/33/33280.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Avaliacao3" tabindex="-1" role="dialog" aria-labelledby="Avaliacao" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Solicitar avaliação</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	   <div class="row">
    <div class="col">
   <img src="imagens/mangaCompridaBranca.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
	</div>
	<div class="col">
	<p class="text-center text-monospace">
	Deseja realmente enviar essa camiseta para avaliação dos administradores?
	</p>
	</div>
	</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar solicitação</button>
      </div>
    </div>
  </div>
</div>
		
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Excluir" data-target="#Excluir3">
		<img src="https://image.flaticon.com/icons/png/512/39/39220.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Excluir3" tabindex="-1" role="dialog" aria-labelledby="Excluir" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Excluir</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-monospace">
	Deseja mesmo excluir essa camiseta?
	  </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Sim</button>
      </div>
    </div>
  </div>
</div>
		</center>
		</figcaption>
		</figure>
	&nbsp;&nbsp;&nbsp;
		<!--------------------------------->
		<figure class="figure">
		<img src="imagens/binariobranca.png" width="198" class="figure-img img-fluid rounded float-left" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure." >
		<figcaption class="figure-caption">
		<center>
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Ver detalhes" data-target="#Detalhes4">
		<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Ponto_de_exclama%C3%A7%C3%A3o_da_RedeTV%21.svg" width="25" height="25">
		</button>
		
		<!-- Modal -->
		
<div class="modal fade" id="Detalhes4" tabindex="-1" role="dialog" aria-labelledby="Detalhes" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title font-weight-bold">Detalhes</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	 
	  <div class="container">
  <div class="row">
    <div class="col">
     	   <img src="imagens/binariobranca.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
    </div>
    <div class="col">
	<H5 class="text-center text-monospace"> Camiseta Branca </H5>
      <p class="text-center text-monospace">
	  Camiseta branca estampada com numeros binarios, 
	  para te deixar no estilo developer.
	  </p>
    </div>
  </div>
  </div>
	  
	 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		</div>
      </div>
    </div>
  </div>
</div>


<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Solicitar avaliacao" data-target="#Avaliacao4">
		<img src="https://image.flaticon.com/icons/png/512/33/33280.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Avaliacao4" tabindex="-1" role="dialog" aria-labelledby="Avaliacao" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Solicitar avaliação</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	   <div class="row">
    <div class="col">
   <img src="imagens/binariobranca.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
	</div>
	<div class="col">
	<p class="text-center text-monospace">
	Deseja realmente enviar essa camiseta para avaliação dos administradores?
	</p>
	</div>
	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar solicitação</button>
      </div>
    </div>
  </div>
</div>
		
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Excluir" data-target="#Excluir4">
		<img src="https://image.flaticon.com/icons/png/512/39/39220.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Excluir4" tabindex="-1" role="dialog" aria-labelledby="Excluir" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Excluir</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-monospace">
	Deseja mesmo excluir essa camiseta?
	  </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Sim</button>
      </div>
    </div>
  </div>
</div>
		</center>
		</figcaption>
		</figure>
			&nbsp;&nbsp;&nbsp;
<!------------------>
		<figure class="figure">
		<img src="imagens/dog.png" width="183" class="figure-img img-fluid rounded float-left" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure." >
		<figcaption class="figure-caption">
		<center>
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Ver detalhes" data-target="#Detalhes5">
		<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Ponto_de_exclama%C3%A7%C3%A3o_da_RedeTV%21.svg" width="25" height="25">
		</button>
		
		<!-- Modal -->
		
<div class="modal fade" id="Detalhes5" tabindex="-1" role="dialog" aria-labelledby="Detalhes" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title font-weight-bold">Detalhes</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	 
	  <div class="container">
  <div class="row">
    <div class="col">
     	   <img src="imagens/dog.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
    </div>
    <div class="col">
	<H5 class="text-center text-monospace"> Camiseta Preta </H5>
      <p class="text-center text-monospace">
	  Camiseta preta estampada com um doguinho toppem.
	  </p>
    </div>
  </div>
  </div>
	  
	 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		</div>
      </div>
    </div>
  </div>
</div>


<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Solicitar avaliacao" data-target="#Avaliacao5">
		<img src="https://image.flaticon.com/icons/png/512/33/33280.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Avaliacao5" tabindex="-1" role="dialog" aria-labelledby="Avaliacao" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Solicitar avaliação</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	   <div class="row">
    <div class="col">
     <img src="imagens/dog.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
	</div>
	<div class="col">
	<p class="text-center text-monospace">
	Deseja realmente enviar essa camiseta para avaliação dos administradores?
	</p>
	</div>
	</div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar solicitação</button>
      </div>
    </div>
  </div>
</div>
		
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Excluir" data-target="#Excluir5">
		<img src="https://image.flaticon.com/icons/png/512/39/39220.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Excluir5" tabindex="-1" role="dialog" aria-labelledby="Excluir" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Excluir</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-monospace">
	Deseja mesmo excluir essa camiseta?
	  </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Sim</button>
      </div>
    </div>
  </div>
</div>
		</center>
		</figcaption>
		</figure>
	&nbsp;&nbsp;&nbsp;
		<!---------------------------------->
		<figure class="figure">
		<img src="imagens/camisetafemininabranca.png" width="194" class="figure-img img-fluid rounded float-left" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure." >
		<figcaption class="figure-caption">
		<center>
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Ver detalhes" data-target="#Detalhes6">
		<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Ponto_de_exclama%C3%A7%C3%A3o_da_RedeTV%21.svg" width="25" height="25">
		</button>
		
		<!-- Modal -->
		
<div class="modal fade" id="Detalhes6" tabindex="-1" role="dialog" aria-labelledby="Detalhes" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title font-weight-bold">Detalhes</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	 
	  <div class="container">
  <div class="row">
    <div class="col">
     	   <img src="imagens/camisetafemininabranca.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
    </div>
    <div class="col">
	<H5 class="text-center text-monospace"> Camiseta Branca Feminina </H5>
      <p class="text-center text-monospace">
	  Camiseta feminina branca, discreta e muito estilosa!
	  </p>
    </div>
  </div>
  </div>
	  
	 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		</div>
      </div>
    </div>
  </div>
</div>


<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Solicitar avaliacao" data-target="#Avaliacao6">
		<img src="https://image.flaticon.com/icons/png/512/33/33280.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Avaliacao6" tabindex="-1" role="dialog" aria-labelledby="Avaliacao" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Solicitar avaliação</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	    <div class="row">
    <div class="col">
     <img src="imagens/camisetafemininabranca.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
	</div>
	<div class="col">
	<p class="text-center text-monospace">
	Deseja realmente enviar essa camiseta para avaliação dos administradores?
	</p>
	</div>
	</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar solicitação</button>
      </div>
    </div>
  </div>
</div>
		
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Excluir" data-target="#Excluir3">
		<img src="https://image.flaticon.com/icons/png/512/39/39220.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Excluir3" tabindex="-1" role="dialog" aria-labelledby="Excluir" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Excluir</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-monospace">
	Deseja mesmo excluir essa camiseta?
	  </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Sim</button>
      </div>
    </div>
  </div>
</div>
		</center>
		</figcaption>
		</figure>
			&nbsp;&nbsp;&nbsp;
<!----------------------------------->
		<figure class="figure">
		<img src="imagens/sun.png" width="182"class="figure-img img-fluid rounded float-left" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure." >
		<figcaption class="figure-caption">
		<center>
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Ver detalhes" data-target="#Detalhes7">
		<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Ponto_de_exclama%C3%A7%C3%A3o_da_RedeTV%21.svg" width="25" height="25">
		</button>
		
		<!-- Modal -->
		
<div class="modal fade" id="Detalhes7" tabindex="-1" role="dialog" aria-labelledby="Detalhes" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title font-weight-bold">Detalhes</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	 
	  <div class="container">
  <div class="row">
    <div class="col">
     	   <img src="imagens/sun.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
    </div>
    <div class="col">
	<H5 class="text-center text-monospace"> Camiseta Preta Sun </H5>
      <p class="text-center text-monospace">
	  Camiseta preta com estampa de sol,
	  para clarear sua vida!
	  </p>
    </div>
  </div>
  </div>
	  
	 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		</div>
      </div>
    </div>
  </div>
</div>


<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Solicitar avaliacao" data-target="#Avaliacao7">
		<img src="https://image.flaticon.com/icons/png/512/33/33280.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Avaliacao7" tabindex="-1" role="dialog" aria-labelledby="Avaliacao" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Solicitar avaliação</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	    <div class="row">
    <div class="col">
       <img src="imagens/sun.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
	</div>
	<div class="col">
	<p class="text-center text-monospace">
	Deseja realmente enviar essa camiseta para avaliação dos administradores?
	</p>
	</div>
	</div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar solicitação</button>
      </div>
    </div>
  </div>
</div>
		
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Excluir" data-target="#Excluir7">
		<img src="https://image.flaticon.com/icons/png/512/39/39220.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Excluir7 tabindex="-1" role="dialog" aria-labelledby="Excluir" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Excluir</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-monospace">
	Deseja mesmo excluir essa camiseta?
	  </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Sim</button>
      </div>
    </div>
  </div>
</div>
		</center>
		</figcaption>
		</figure>
		
			&nbsp;&nbsp;&nbsp;
<!----------------------------------------->
		<figure class="figure">
		<img src="imagens/bad.png" width="186"  class="figure-img img-fluid rounded float-left" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure." >
		<figcaption class="figure-caption">
		<center>
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Ver detalhes" data-target="#Detalhes9">
		<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Ponto_de_exclama%C3%A7%C3%A3o_da_RedeTV%21.svg" width="25" height="25">
		</button>
		
		<!-- Modal -->
		
<div class="modal fade" id="Detalhes9" tabindex="-1" role="dialog" aria-labelledby="Detalhes" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title font-weight-bold">Detalhes</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	 
	  <div class="container">
  <div class="row">
    <div class="col">
     	   <img src="imagens/bad.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
    </div>
    <div class="col">
	<H5 class="text-center text-monospace"> Camiseta estampada BAD </H5>
      <p class="text-center text-monospace">
	  Camiseta preta estampada, para te deixar no estilo!
	  </p>
    </div>
  </div>
  </div>
	  
	 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		</div>
      </div>
    </div>
  </div>
</div>


<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Solicitar avaliacao" data-target="#Avaliacao9">
		<img src="https://image.flaticon.com/icons/png/512/33/33280.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Avaliacao9" tabindex="-1" role="dialog" aria-labelledby="Avaliacao" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Solicitar avaliação</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	   <div class="row">
    <div class="col">
     <img src="imagens/bad.png" width="200" height="200" class="figure-img img-fluid rounded float-left" alt="" >
	</div>
	<div class="col">
	<p class="text-center text-monospace">
	Deseja realmente enviar essa camiseta para avaliação dos administradores?
	</p>
	</div>
	</div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar solicitação</button>
      </div>
    </div>
  </div>
</div>
		
		<!-- Botão para acionar modal -->
<button type="button" class="btn " data-toggle="modal" title="Excluir" data-target="#Excluir9">
		<img src="https://image.flaticon.com/icons/png/512/39/39220.png" width="25" height="25">
		</button>
		
		<!-- Modal -->
<div class="modal fade" id="Excluir9" tabindex="-1" role="dialog" aria-labelledby="Excluir" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Excluir</h3></center>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-monospace">
	Deseja mesmo excluir essa camiseta?
	  </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Sim</button>
      </div>
    </div>
  </div>
</div>
		</center>
		</figcaption>
		</figure>
			&nbsp;&nbsp;&nbsp;
<!------------------------>

		</center>
	</div>
	</div>
	<div class="col-1"></div>
<div class="col-2">
<img src="imagens/prop.png" width="180" style="border: #000000 Solid 1px;">
</div>
</div>
</div>


	
		
	


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