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
                    <a href="/view/home.php"
                        class="nav-link <?php echo ($current_route == '/view/home.php') ? 'active' : ''; ?>">
                        <i class="fa-solid fa-house mr-2"></i>
                        <p>
                            Accueil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/view/personnels/index.php"
                        class="nav-link <?php echo (strpos($current_route, 'personnels') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-users mr-2"></i>
                        <p>
                            Personnels
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/view/categorie/index.php"
                        class="nav-link <?php echo (strpos($current_route, 'categorie') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-list mr-2"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/view/conge/index.php"
                        class="nav-link <?php echo (strpos($current_route, 'conge') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-person-walking-luggage mr-2"></i>
                        <p>
                            Congés
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/view/absences/index.php"
                        class="nav-link <?php echo (strpos($current_route, 'absence') !== false) ? 'active' : ''; ?>">
                        <i class="fa-regular fa-calendar-minus mr-2"></i>
                        <p>
                            Absences
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/view/missions/index.php"
                        class="nav-link <?php echo (strpos($current_route, 'missions') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-business-time mr-2"></i>
                        <p>
                            Missions
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>