<aside class="main-sidebar">

  <section class="sidebar">

    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= HTTP.'/vistas/imagenes/usuarios/foto_perfil.jpg'?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header"> Menu de navegacion</li>
      <li>
        <a href="<?= HTTP.'index.php?pagina=usuarios'?>">
          <i class="fa fa-user"></i><span>Usuarios</span>
        </a>
      </li>
      <li>
        <a href="<?= HTTP.'index.php?pagina=roles'?>">
          <i class="fa fa-link"></i><span>Roles</span>
        </a>
      </li>

    </ul>


  </section>
  <!-- /.sidebar -->
</aside>