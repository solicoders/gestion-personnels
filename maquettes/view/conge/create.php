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
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <section class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title"> <i class="nav-icon fas fa-table"></i> Ajouter un congé</h3>
                                </div>
                                <!-- Obtenir le formulaire -->
                                <?php include_once "./form.php" ?>
                            </section>
                            <section class="card">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header col-md-12">
                                                <div class="d-flex justify-content-between">
                                                   
                                                </div>
                                            </div>

                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-striped text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Date départ</th>
                                                            <th>Date retour</th>
                                                            <th class="text-center">Nombre de jours</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2024-02-28</td>
                                                            <td>2024-03-2</td>
                                                            <td class="text-center">5</td>
                                                            <td class="text-center">
                                                                <a href="./show.php" class='btn btn-default btn-sm'>
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                                <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2024-02-28</td>
                                                            <td>2024-03-2</td>
                                                            <td class="text-center">3</td>
                                                            <td class="text-center">
                                                                <a href="./show.php" class='btn btn-default btn-sm'>
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                                <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2024-02-28</td>
                                                            <td>2024-03-2</td>
                                                            <td class="text-center">7</td>
                                                            <td class="text-center">
                                                                <a href="./show.php" class='btn btn-default btn-sm'>
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                                <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2024-02-28</td>
                                                            <td>2024-03-2</td>
                                                            <td class="text-center">6</td>
                                                            <td class="text-center">
                                                                <a href="./show.php" class='btn btn-default btn-sm'>
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                                <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </div>

    <!-- Inclure le pied de page -->
    <?php include_once "../layouts/footer.php" ?>

    </div>

    <!-- Inclure le script -->
    <?php include_once "../layouts/script-link.php" ?>
</body>

</html>