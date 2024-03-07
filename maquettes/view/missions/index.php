<!DOCTYPE html>
<html lang="fr">

<?php include_once "../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "../layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "../layouts/aside.php" ?>

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
                                <h1>Liste des ordre des missions</h1>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <a href="./create.php" class="btn btn-info">
                                        <i class="fas fa-plus"></i> Nouvelle mission
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header col-md-12">
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end">

                                                    <div class=" p-0">
                                                        <div class="input-group input-group-sm">
                                                            <input type="text" name="table_search" class="form-control"
                                                                placeholder="Recherche">
                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-default">
                                                                    <i class="fas fa-search"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-striped text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Matricule</th>
                                                    <th>Personnel</th>
                                                    <th>Nom de mission</th>
                                                    <th>Lieu</th>
                                                    <th>Durée</th>
                                                    <th>Date de départ
                                                        <!-- <span class=" mx-2" style="cursor: pointer;"> <i
                                                                class="fa-solid fa-sort"></i></span> -->
                                                    </th>
                                                    <th class="text-center">État</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>121</td>
                                                    <td>Madani ali</td>
                                                    <td>Voyage d'affaires</td>
                                                    <td>Rabat</td>
                                                    <td>2</td>
                                                    <td>2024-03-01</td>
                                                    <td class="text-center">
                                                        <a href="./show.php" class='btn btn-default btn-sm'>
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>180</td>
                                                    <td>Jalil Betroji</td>
                                                    <td>Conférence</td>
                                                    <td>casablanca</td>
                                                    <td>5</td>
                                                    <td>2024-02-05</td>
                                                    <td class="text-center">
                                                        <a href="./show.php" class='btn btn-default btn-sm'>
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>90</td>
                                                    <td>Lamchatab Amine</td>
                                                    <td>Conférence</td>
                                                    <td>Casablanca</td>
                                                    <td>5</td>
                                                    <td>2024-01-17</td>
                                                    <td class="text-center">
                                                        <a href="./show.php" class='btn btn-default btn-sm'>
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>69</td>
                                                    <td>hamid Achaou</td>
                                                    <td>Entraînement</td>
                                                    <td>Tanger</td>
                                                    <td>3</td>
                                                    <td>2023-12-09</td>
                                                    <td class="text-center">
                                                        <a href="./show.php" class='btn btn-default btn-sm'>
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row justify-content-between p-2">
                                        <div class="col-6 align-self-end">
                                            <button type="button" class="btn btn-default btn-sm">
                                                <i class="fa-solid fa-file-arrow-down"></i>
                                                IMPORTER</button>
                                            <button type="button" class="btn btn-default btn-sm ">
                                                <i class="fa-solid fa-file-export"></i>
                                                EXPORTER</button>
                                        </div>
                                        <div class="col-6">
                                            <ul class="pagination  m-0 float-right">
                                                <li class="page-item"><a class="page-link text-secondary" href="#">«</a>
                                                </li>
                                                <li class="page-item"><a class="page-link text-secondary active"
                                                        href="#">1</a></li>
                                                <li class="page-item"><a class="page-link text-secondary" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link text-secondary" href="#">3</a>
                                                </li>
                                                <li class="page-item"><a class="page-link text-secondary" href="#">»</a>
                                                </li>
                                            </ul>
                                        </div>
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

    </div>
</body>

<!-- get script -->
<?php include_once "../layouts/script-link.php"; ?>

</html>