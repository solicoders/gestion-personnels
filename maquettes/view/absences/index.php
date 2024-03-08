<!DOCTYPE html>
<html lang="fr">

<?php

include_once "../../view/layouts/heade.php"

?>

<body class="sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include_once "../../view/layouts/nav.php" ?>

        <?php include_once "../../view/layouts/aside.php" ?>

        <div class="content-wrapper" style="min-height: 1302.4px;">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Liste des absences</h1>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-right">
                                <a href="./create.php" class="btn btn-info">
                                    <i class="fas fa-plus"></i> Ajouter une absence
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
                                            <select class="form-select form-control" id="filterSelectProjrctValue" aria-label="Filter Select">
                                                <option value="précédent">Établissement</option>
                                                <option value="précédent">Solicode</option>
                                                <option value="précédent">NTIC</option>
                                                <option value="précédent">Ibn Marhal</option>
                                            </select>
                                            <!--  -->
                                            <select class="form-select form-control" id="filterSelectProjrctValue" aria-label="Filter Select">
                                                <option value="précédent">Motif</option>
                                                <option value="précédent">Congés</option>
                                                <option value="précédent">Vacances</option>
                                                <option value="précédent">Mission</option>
                                                <option value="précédent">Malade</option>
                                                <option value="précédent">Non justifier</option>
                                            </select>

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
                                    <!-- table -->
                                    <?php include_once "./table.php" ?>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between align-items-center p-2">
                                        <div class="d-flex align-items-center mb-2">
                                            <button type="button" class="btn btn-default btn-sm">
                                                <i class="fa-solid fa-file-arrow-down"></i>
                                                IMPORTER</button>
                                            <button type="button" class="btn btn-default btn-sm mt-0 mx-2">
                                                <i class="fa-solid fa-file-export"></i>
                                                EXPORTER</button>
                                        </div>
                                        <div class="">
                                            <ul class="pagination  m-0 float-right">
                                                <li class="page-item"><a class="page-link text-secondary" href="#">«</a></li>
                                                <li class="page-item"><a class="page-link text-secondary active" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link text-secondary" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link text-secondary" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link text-secondary" href="#">»</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="">
                                        <!-- impriment -->
                                        <div class="d-flex justify-content-end row">
                                            <div class="col-md-2 d-flex align-items-center input-groupe">
                                                <a href="./document-absenteisme.php" class="btn  bg-purple py-2 btn-sm w-100">
                                                    <i class="fa-solid fa-print"></i>
                                                    IMPRIMER</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>

        <?php include_once "../../view/layouts/footer.php" ?>

    </div>

    <script>
        $(document).ready(function() {
            $('#select1').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                multiple: true
            })
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <!-- get script -->
    <?php include_once "../../view/layouts/script-link.php"; ?>

</body>

</html>