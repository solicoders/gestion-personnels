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
                            <h1>Détails de collaborateur</h1>
                        </div>
                        <div class="col-sm-6">
                            <a href="./modifier.php" class="btn btn-default float-right"><i class="far fa-edit"></i> Modifier</a>
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
                                        <label for="nom">Nom:</label>
                                        <p>Hamouda</p>
                                    </div>

                                    <!-- Prenom -->
                                    <div class="col-sm-12">
                                        <label for="prenom">Prenom :</label>
                                        <p>Abdelmounaim</p>
                                    </div>
                                    <!-- Role -->
                                    <div class="col-sm-12">
                                        <label for="Echelle">Role :</label>
                                        <p>Chef de formation</p>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-sm-12">
                                        <label for="Echellen">Email :</label>
                                        <p>hamouda@ofppt.com</p>
                                    </div>
                                    <!-- Field -->
                                    <div class="col-sm-12">
                                        <label for="Echellen">Field :</label>
                                        <p>Réseau informatique</p>
                                    </div>
                                      <!-- Date de début -->
                                      <div class="col-sm-12">
                                        <label for="date">Date de début :</label>
                                        <p>11/02/2024</p>
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

    <!-- Inclure le script -->
    <?php include_once "../layouts/script-link.php" ?>
</body>

</html>