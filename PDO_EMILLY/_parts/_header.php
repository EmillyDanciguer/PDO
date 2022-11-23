TML
<header>
  <!-- Navbar -->
  <?php 
$arqui = explode(DIRECTORY_SEPARATOR,$_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" style="color:white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">3°ANO B</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if($arqui[2]=='index.php')echo 'active'; ?>" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($arqui[2]=='clientes.php')echo 'active'; ?>" href="clientes.php">CLIENTES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($arqui[2]=='servicos.php')echo 'active'; ?>" href="servicos.php">SERVIÇOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($arqui[2]=='vendas.php')echo 'active'; ?>" href="ordens.php">ORDENS DE SERVIÇO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($arqui[2]=='usuarios.php')echo 'active'; ?>" href="usuarios.php">USUÁRIOS</a>
        </li>
    </div>
  </div>
</nav>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div
    class="p-4 text-center bg-image"
    style="
      background-image: url('Images/a.jpg');
      height: 250px;">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); margin-top: 50px;">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-1">Emilly Kelly Silva Danciguer</h1>
          <h2 class="mb-1">Tecnico em Infomática</h2>
          <h4>Atividade Interdisciplinar 4°Bimestre</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>