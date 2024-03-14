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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Détail des Missions</h1>
                        </div>
                        <div class="col-sm-6">
                            <a href="javascript:history.go(-1);" class="btn btn-default float-right"><i
                                    class="fas fa-arrow-left"></i> Retoure</a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body row">
                                    <section class="col-12">
                                        <img src="" alt="ofppt">
                                    </section>
                                    <section class="col-12">
                                        <H2 class="text-center text-uppercase font-weight-bold border border-dark">
                                            ORDRE DE MISSION
                                        </H2>
                                        <p class="text-center font-weight-normal text-capitalize mt-3 mb-0"
                                            style="font-size: 20px;">le directeur
                                            régional de la DRTTA
                                        </p>
                                        <p class="text-center font-weight-normal text-capitalize mb-5"
                                            style="font-size: 20px;">-Tanger-</p>
                                    </section>
                                    <section class="col-12">
                                        <h3 class="text-center text-uppercase font-weight-normal">Désigne</h3>
                                    </section>
                                    <section class="col-12">
                                        footer
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Inclure le pied de page -->
        <?php include_once "../layouts/footer.php" ?>

    </div>

    <!-- Inclure le script -->
    <?php include_once "../layouts/script-link.php" ?>
</body>

</html>