<?php
$current_route = $_SERVER['REQUEST_URI'];
?>

<aside class="main-sidebar sidebar-dark-info elevation-4 position-fixed">
    <!-- Logo de la marque -->
    <a href="index.php" class="brand-link">
        <img src="/view/assets/images/logo.png" class="brand-image img-circle elevation-3" alt="Image de groupe">
        <h6 class="brand-text font-weight-light text-center">Gestion Personnelles</h6>
    </a>

    <div class="sidebar">
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
                    <a href=""
                        class="nav-link <?php echo (strpos($current_route, 'personnels') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-users mr-2"></i>
                        <p>
                            Personnels
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="nav-item">
                            <a href="/view/personnels/index.php"
                                class="nav-link <?php echo (strpos($current_route, 'personnels/index.php') !== false) ? 'active' : ''; ?>">
                                <i class="fa-solid fa-bars-staggered mr-2"></i>
                                <p>List des personnels</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/personnels/document.html"
                                class="nav-link <?php echo (strpos($current_route, 'personnels/document.php') !== false) ? 'active' : ''; ?>">
                                <i class="fa-solid fa-paste mr-2"></i>
                                <p>Documents</p>
                            </a>
                        </li>
                    </ul>
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
                    <a href=""
                        class="nav-link <?php echo (strpos($current_route, 'conge') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-users mr-2"></i>
                        <p>
                            Congés
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="nav-item">
                            <a href="/view/conge/index.php"
                                class="nav-link <?php echo (strpos($current_route, 'conge/index.php') !== false) ? 'active' : ''; ?>">
                                <i class="fa-solid fa-bars-staggered mr-2"></i>
                                <p>List des conges</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/conge/décision.html"
                                class="nav-link <?php echo (strpos($current_route, 'conge/décision.php') !== false) ? 'active' : ''; ?>">
                                <i class="fa-solid fa-paste mr-2"></i>
                                <p>Décisions</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href=""
                        class="nav-link <?php echo (strpos($current_route, 'absences') !== false) ? 'active' : ''; ?>">
                        <i class="fa-regular fa-calendar-minus mr-2"></i>
                        <p>
                            Absences
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="nav-item">
                            <a href="/view/absences/index.php"
                                class="nav-link <?php echo (strpos($current_route, 'absences/index.php') !== false) ? 'active' : ''; ?>">
                                <i class="fa-solid fa-bars-staggered mr-2"></i>
                                <p>List des absences</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/absences/décision.html"
                                class="nav-link <?php echo (strpos($current_route, 'absences/décision.php') !== false) ? 'active' : ''; ?>">
                                <i class="fa-solid fa-paste mr-2"></i>
                                <p>Décisions</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href=""
                        class="nav-link <?php echo (strpos($current_route, 'missions') !== false) ? 'active' : ''; ?>">
                        <i class="fa-regular fa-calendar-minus mr-2"></i>
                        <p>
                            Missions
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="nav-item">
                            <a href="/view/missions/index.php"
                                class="nav-link <?php echo (strpos($current_route, 'missions/index.php') !== false) ? 'active' : ''; ?>">
                                <i class="fa-solid fa-bars-staggered mr-2"></i>
                                <p>List des missions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/missions/décisions.html"
                                class="nav-link <?php echo (strpos($current_route, 'missions/décision.php') !== false) ? 'active' : ''; ?>">
                                <i class="fa-solid fa-paste mr-2"></i>
                                <p>Décisions</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>