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
<a href="menuDeslogado.php">Sair</a>
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
<header>
<div class="container-fluid">
  <div class="row">
    <div class="col-3">
 <table class="table ">
 <thead class="thead-dark">
     <tr>
      <th scope="col" colspan="2">
	   <center>
	    Upload </br>
	    <img src="imagens/upload.png" width="50" height="50" class="rounded " alt="...">
		</center>
		</th>
   
    </tr>
  </thead>
  <tbody>
   <tr>
     
      <td></td>
    </tr>
	 <tr>
     
      <td>	<a class="nav-link" href="incluir adm.php"><img src="imagens/dog.png" width="150" height="150" class="rounded float-left" alt="..."></a></td>
      <td><a class="nav-link" href="incluir adm 2.php""><img src="imagens/binariobranca.png" width="150" class="rounded float-left" alt="..."></td>
    </tr>
   <tr>
     
      <td><a class="nav-link" href="incluir adm 3.php""><img src="imagens/sun.png" width="150" class="rounded float-left" alt="..."></a></td>
      <td><a class="nav-link" href="incluir adm 4.php""><img src="imagens/bad.png" width="150" class="rounded float-left" alt="..."></a></td>
    </tr>
  </tbody>
  </table>

</div>

<div class="col-5"></div>

  <div class="col-4">
  <center>
  <table class="table ">
  <thead>
    <tr>
      <th scope="col">
	  <input class="form-control" type="text" placeholder="Nome da camiseta">
     
    </tr>
  </thead>
  <tbody>
    <tr>
	<td>
    <img src="imagens/binariobranca.png" width="400"  class="figure-img img-fluid rounded " alt="">
    </td>
	</tr>
	<tr>
	<td>
	<div class="form-group">
    <label for="exampleFormControlTextarea1">Descrição da camiseta</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <!-- Botão para acionar modal -->
  <center>
	<button type="button" class="btn btn-dark" data-toggle="modal tooltip" data-placement="bottom" title="Confirmar inclusão da camiseta" data-target="#Incluir">
	Incluir
	</button>
</center>
<!-- Modal -->
<div class="modal fade" id="Incluir" tabindex="-1" role="dialog" aria-labelledby="LucroIndividual" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmar Inclusãol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     Deseja confirma a inclusão dessa camiseta?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sim</button>
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
      </div>
    </div>
  </div>
</div>
	</td>
	</tr>
  
  </tbody>
</table>
</center>
 
  </div>

  
     </div>
</center>
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