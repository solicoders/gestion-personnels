<!DOCTYPE html>
<html lang="fr">

<!-- Inclure l'en-tête -->
<?php include_once "../../view/layouts/heade.php" ?>


<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "../../view/layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "../../view/layouts/aside.php" ?>



        <div class="content-wrapper" style="min-height: 1302.4px;">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Détails du absence</h1>
                        </div>
                        <div class="col-sm-6">
                            <a href="./index.php" class="btn btn-default float-right">
                                <!-- <i class="far fa-edit"></i> -->
                                Retour</a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <label for="Matricule">Matricule:</label>
                                        <p>12345</p>
                                    </div>

                                    <div class="col-sm-12">
                                        <label for="nom">Nom:</label>
                                        <p>Alami</p>
                                    </div>


                                    <div class="col-sm-12">
                                        <label for="prenom">Prénom:</label>
                                        <p>Amine</p>
                                    </div>

                                    <!-- Motif Title -->
                                    <div class="col-sm-12">
                                        <label for="description">Motif:</label>
                                        <p>Congé</p>
                                    </div>

                                    <!-- Description Field -->
                                    <div class="col-sm-12">
                                        <label for="description">Date:</label>
                                        <p>Date de début: 11-07-2024</p>
                                        <p>Date de fin: 11-07-2024</p>
                                    </div>
                                    <!--  	Durée absence Field -->
                                    <div class="col-sm-12">
                                        <label for="durée-absence">Durée absence:</label>
                                        <p>5 jours</p>
                                    </div>
                                </div>
                            </div>

                            <!-- tout les absences -->
                            <div class="content-header">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1>Tout les absences</h1>
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
                                                    <table class="table table-striped text-nowrap table-print">
                                                        <thead>
                                                            <tr>
                                                                <th>Matricule</th>
                                                                <th>Motif</th>
                                                                <th>Date de début</th>
                                                                <th>Date de fin</th>
                                                                <th>Durée absence</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>12345</td>
                                                                <td>Ordre de mission</td>
                                                                <td>20/02/2022</td>
                                                                <td>25/02/2022</td>
                                                                <td>5 jour</td>
                                                                <td>
                                                                    <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12345</td>
                                                                <td>Vacances</td>
                                                                <td>21/02/2022</td>
                                                                <td>25/02/2022</td>
                                                                <td>4 jour</td>
                                                                <td>
                                                                    <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12345</td>
                                                                <td>Congé</td>
                                                                <td>23/02/2022</td>
                                                                <td>25/02/2022</td>
                                                                <td>2 jour</td>
                                                                <td>
                                                                    <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12345</td>
                                                                <td>Malade</td>
                                                                <td>25/02/2022</td>
                                                                <td>27/02/2022</td>
                                                                <td>2 jour</td>
                                                                <td>
                                                                    <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12345</td>
                                                                <td>Malade</td>
                                                                <td>25/02/2022</td>
                                                                <td>27/02/2022</td>
                                                                <td>2 jour</td>
                                                                <td>
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
                    </div>
                </div>
            </section>

        </div>


        <!-- Inclure le pied de page -->
        <?php include_once "../../view/layouts/footer.php" ?>

    </div>

    <?php include_once "../../view/layouts/script-link.php"; ?>

    <!-- Inclure le script -->
</body>

</html>