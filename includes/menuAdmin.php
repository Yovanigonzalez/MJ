
 <!--==========================
  Menu de navegacion
  ============================-->
  <header id="header">
    <div class="container">
     
      <div id="logo" class="pull-left">
       <h2><a href="index.php#inicio">MJ SOLUCIONES EN TI</a></h2>
      </div>

         <!--- Menu de navegacion -->

      <nav id="nav-menu-container">
        <ul class="nav-menu">

        <!--- Direcciona al menu de inicio -->
          <li class="menu-active"><a href="index.php#home">Inicio</a></li>
          
        <!--- Direcciona al menu de servicios -->  
          <li><a href="modificar_Adm.php">Servicios</a></li>
          
        <!--- Direcciona al menu de banner -->
          <li class="menu-has-children">  <a href="adminBan.php">Banner</a>

        <!--- Direcciona al menu de productos -->
          <li class="menu-has-children">  <a href="productos.php">Productos</a>

        <!--- Direcciona al menu de capacitaciones -->
          <li><a href="capacitaciones.php">Capacitaciones</a></li>

        <!--- Direcciona al menu de acerca de -->
          <li><a href="acerca.php">Acerca de</a></li>

 


        <!--- CREA CONFLICTO AL LLAMAR AL user -->

<?php if(!isset($_SESSION['user'])): ?>
  <li><a href="login.php">Iniciar Sesi��n</a></li>
<?php endif; ?>

<?php if(isset($_SESSION['user'])): ?>
  
  <li class="menu-has-children"><a href="#"> Bienvenido <?php echo $_SESSION['user']?></a>
  <ul>  
        <li><a href="usuario.php">Mis datos</a></li>
        <li><a href="desconectar.php">Cerrar sesión</a></li>
  </ul>
  </li>

<?php endif; ?>



      
    </div>
  </header>
  <!-- #header -->