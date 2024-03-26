<!DOCTYPE html>
<html lang="fr">

<!-- Inclure l'en-tête -->
<?php include_once "../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "../layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "../layouts/aside.php" ?>

        <div class="content-wrapper" style="min-height: 1302.4px;">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-header">
                            </div>
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title"> <i class="fa-solid fa-bars-staggered mr-2"></i> Ajouter un congé</h3>
                                </div>
                                <!-- Obtenir le formulaire -->
                                <?php include_once "./form.php" ?>
                            </div>

                        </div>
                    </div>
            </section>

            <!-- get info calc jour restants -->
            <?php include_once "./info-calc.php" ?>
        </div>

        <!-- Inclure le pied de page -->
        <?php include_once "../layouts/footer.php" ?>

        <!-- Inclure le script -->
        <?php include_once "../layouts/script-link.php" ?>
    </div>

</body>

</html>