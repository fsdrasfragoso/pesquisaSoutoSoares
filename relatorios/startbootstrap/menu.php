<?php include('../classes/DB.class.php')?>
<?php include('../classes/Relatorio.class.php')?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
         
        </div>
        <div class="sidebar-brand-text mx-3">Souto Soares </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Paginas</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pagina Inicial dos Relatórios</h6>
            <a class="collapse-item" href="../home.php">Pagina Home</a>
            <a class="collapse-item" href="../cadastro.php">Cadastro</a>
            <a class="collapse-item" href="../dados.php">Geral</a>           
            <a class="collapse-item" href="../urbanas.php">Urbanas</a>
            <a class="collapse-item" href="../rurais.php">Rurais</a>
            <a class="collapse-item" href="../bairros.php">Bairros</a>            
            <a class="collapse-item" href="../segPub.php">Q. 8 - Seg. Pública</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Ferramentas </span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ferramentas de Exclusão:</h6>
            <a class="collapse-item" href="excluir.php">Excluir Relatorios</a>           
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#"  data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-table"></i>
          <span>Relatórios</span></a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          
          <h6 class="collapse-header">Criar Relatorio:</h6>
            <a class="collapse-item" href="../monte.php">Criar Novo Relatorio - Perfil da Família
          </a>
          <a class="collapse-item" href="relatorioAdolecente.php">Criar Relatorio Adolescente </a> 
          <a class="collapse-item" href="../relatorioporcentagem.php">Criar Relatorio de Porcentagem </a> 
          <h6 class="collapse-header">Lista de Relatórios:</h6>
            <?php 
              $relatorios = Relatorio::getRelatorios();
              foreach($relatorios as $res){?>
                <a class="collapse-item" href="tables.php?id=<?php echo $res[0] ?>"><?php print_r($res[1]); echo '<br/>'; ?></a>         
              <?php } ?>
                         
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>