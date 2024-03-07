<?php
$current_route = $_SERVER['REQUEST_URI'];
?>

<aside class="main-sidebar sidebar-dark-info elevation-4 position-fixed">
    <!-- Logo de la marque -->
    <a href="/view/home.php" class="brand-link">
        <img src="/view/assets/images/logo.png" class="brand-image img-circle elevation-3" alt="Image de groupe">
        <h6 class="brand-text font-weight-light text-center ">Gestion Personnelles</h6>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Start package Accueil -->
                <li class="nav-item">
                    <a href="/view/home.php"
                        class="nav-link <?php echo ($current_route == '/view/home.php') ? 'active' : ''; ?>">
                        <i class="fa-solid fa-house mr-2"></i>
                        <p class="">
                            Accueil
                        </p>
                    </a>
                </li>
                <!-- end package Accueil -->

                <!-- start package Personnels -->
                <li class="nav-item">
                    <a href=""
                        class="nav-link <?php echo (strpos($current_route, 'personnels') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-users mr-2"></i>
                        <p class="">
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
                                <p class="">List des personnels</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/personnels/attestation-des-travaux.php"
                                class="nav-link <?php echo (strpos($current_route, 'personnels/attestation-des-travaux.php') !== false) ? 'active' : ''; ?>">
                                <i class="fa-regular fa-file-lines mr-2"></i>
                                <p class="">Attestation des travaux</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end package Personnels -->

                <!-- start package Categories -->
                <li class="nav-item">
                    <a href="/view/categorie/index.php"
                        class="nav-link <?php echo (strpos($current_route, 'categorie') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-list mr-2"></i>
                        <p class="">
                            Categories
                        </p>
                    </a>
                </li>
                <!-- end package Categories -->

                <!-- start package Congés -->
                <li class="nav-item">
                    <a href=""
                        class="nav-link <?php echo (strpos($current_route, 'conge') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-users mr-2"></i>
                        <p class="">
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
                                <p class="">List des congés</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/conge/décision-des-congés.php"
                                class="nav-link <?php echo (strpos($current_route, 'conge/décision-des-congés.php') !== false) ? 'active' : ''; ?>">
                                <i class="fa-regular fa-file-lines mr-2"></i>
                                <p class="">Décision des congés</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end package Congés -->

                <!-- start package Absences -->
                <li class="nav-item">
                    <a href=""
                        class="nav-link <?php echo (strpos($current_route, 'absences') !== false) ? 'active' : ''; ?>">
                        <i class="fa-regular fa-calendar-minus mr-2"></i>
                        <p class="">
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
                                <p class="">List des absences</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/absences/maquette-absentéisme.html"
                                class="nav-link <?php echo (strpos($current_route, 'absences/maquette-absentéisme.php') !== false) ? 'active' : ''; ?>">
                                <i class="fa-regular fa-file-lines mr-2"></i>
                                <p class="">Maquette d'absentéisme</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- start package Absences -->

                <!-- start package Missions -->
                <li class="nav-item">
                    <a href=""
                        class="nav-link <?php echo (strpos($current_route, 'missions') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-business-time mr-2"></i>
                        <p class="">
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
                            <a href="/view/missions/ordre-des-missions.php"
                                class="nav-link <?php echo (strpos($current_route, 'missions/ordre-des-missions.php') !== false) ? 'active' : ''; ?>">
                                <i class="fa-regular fa-file-lines mr-2"></i>
                                <p class="">Ordre des missions</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end package Missions -->
            </ul>
        </nav>
    </div>
</aside>