<?php
$current_route = $_SERVER['REQUEST_URI'];
?>

<aside class="main-sidebar sidebar-dark-info elevation-4 position-fixed">
  <!-- Logo de la marque -->
  <a href="index.php" class="brand-link">
    <img src="/view/assets/images/logo.png" class="brand-image img-circle elevation-3" alt="Image de groupe">
    <h6 class="brand-text font-weight-light text-center">Gestion Personnelles</h6>
  </a>

  <!-- Barre latérale -->
  <div class="sidebar">
    <!-- Menu latéral -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/view/home.php" class="nav-link <?php echo ($current_route == '/view/home.php') ? 'active' : ''; ?>">
            <i class="fa-solid fa-house"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/view/personnels/index.php" class="nav-link <?php echo (strpos($current_route, 'personnels') !== false) ? 'active' : ''; ?>">
            <i class="fa-solid fa-users"></i>
            <p>
              Personnels
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/view/categorie/index.php" class="nav-link <?php echo (strpos($current_route, 'categorie') !== false) ? 'active' : ''; ?>">
            <i class="fa-solid fa-list"></i>
            <p>
              Categorie
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/view/conge/index.php" class="nav-link <?php echo (strpos($current_route, 'conge') !== false) ? 'active' : ''; ?>">
          <i class="fa-solid fa-person-walking-luggage"></i>
            <p>
              Congé
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/view/absences/index.php" class="nav-link <?php echo (strpos($current_route, 'Collaborateur') !== false) ? 'active' : ''; ?>">
            <i class="fa-solid fa-calendar-days"></i>
            <p>
              Absences
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>