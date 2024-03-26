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
        </div>

        <div class="modal fade" id="modal-lg" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Détails du calcul</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date départ</th>
                                            <th>Date retour</th>
                                            <th class="text-center">Nombre de jours</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2024-02-28</td>
                                            <td>2024-03-2</td>
                                            <td class="text-center">5</td>
                                        </tr>
                                        <tr>
                                            <td>2024-02-28</td>
                                            <td>2024-03-2</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td>2024-02-28</td>
                                            <td>2024-03-2</td>
                                            <td class="text-center">7</td>
                                        </tr>
                                        <tr>
                                            <td>2023-12-2</td>
                                            <td>2024-12-9</td>
                                            <td class="text-center">6</td>
                                        </tr>
                                        <tr>
                                            <td>2023-7-12</td>
                                            <td>2023-12-19</td>
                                            <td class="text-center">5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>

                </div>

        </div>
        
                    <!-- Inclure le pied de page -->
                    <?php include_once "../layouts/footer.php" ?>

        <!-- Inclure le script -->
        <?php include_once "../layouts/script-link.php" ?>
    </div>

</body>

</html>