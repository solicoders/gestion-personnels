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
                                <h1>Liste des congés</h1>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <a href="./create.php" class="btn btn-info">
                                        <i class="fas fa-plus"></i> Nouveau congé
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
                                        <div class="d-flex justify-content-between">
                                            <div class="d-md-flex">
                                                <div class="dropdown input-group">
                                                    <button class="btn btn-default mr-3 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa-solid fa-filter text-dark pr-2 border-right"></i>
                                                        Année
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">2020</a>
                                                        <a class="dropdown-item" href="#">2021</a>
                                                        <a class="dropdown-item" href="#">2022</a>
                                                        <a class="dropdown-item" href="#">2023</a>
                                                        <a class="dropdown-item" href="#">2024</a>
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <div class="dropdown input-group">
                                                    <button class="btn btn-default mr-3 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa-solid fa-filter text-dark pr-2 border-right"></i>
                                                        Type congés
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">All congés</a>
                                                        <a class="dropdown-item" href="#">congé actuelle</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" p-0">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" name="table_search" class="form-control" placeholder="Recherche">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-search"></i>
                                                        </button>
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
                                                    <th>Collaborateur</th>
                                                    <th>Date début</th>
                                                    <th>Date Fin</th>
                                                    <th class="text-center">Jours restants</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>20240228</td>
                                                    <td>Mohamed Alami</td>
                                                    <td>2024-02-28</td>
                                                    <td>2024-02-28</td>
                                                    <td class="text-center">5</td>
                                                    <td class="d-flex justify-content-center">
                                                        <a href="./show.php" class='btn btn-default btn-sm'>
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                        <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>20242128</td>
                                                    <td>Amin Lmadani</td>
                                                    <td>2024-02-28</td>
                                                    <td>2024-02-28</td>
                                                    <td class="text-center">8</td>
                                                    <td class="d-flex justify-content-center">
                                                        <a href="./show.php" class='btn btn-default btn-sm'>
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                        <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>20244328</td>
                                                    <td>Jalil Alami</td>
                                                    <td>2024-02-28</td>
                                                    <td>2024-02-28</td>
                                                    <td class="text-center">2</td>
                                                    <td class="d-flex justify-content-center">
                                                        <a href="./show.php" class='btn btn-default btn-sm'>
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                        <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>20244328</td>
                                                    <td>khalid lmadani</td>
                                                    <td>2024-02-28</td>
                                                    <td>2024-02-28</td>
                                                    <td class="text-center">3</td>
                                                    <td class="d-flex justify-content-center">
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

                                    <div class="d-flex justify-content-between align-items-center p-2">
                                        <div class="d-flex align-items-center mb-2">
                                            <button type="button" class="btn btn-default btn-sm">
                                                <i class="fa-solid fa-file-arrow-down"></i>
                                                IMPORTER</button>
                                            <button type="button" class="btn btn-default btn-sm mt-0 mx-2">
                                                <i class="fa-solid fa-file-export"></i>
                                                EXPORTER</button>
                                        </div>
                                        <div class="mr-5">
                                            <ul class="pagination  m-0 float-right">
                                                <li class="page-item"><a class="page-link text-secondary" href="#">«</a></li>
                                                <li class="page-item"><a class="page-link text-secondary active" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link text-secondary" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link text-secondary" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link text-secondary" href="#">»</a></li>
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