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
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Modifier une mission</h3>
                                </div>
                                <?php include_once "./form.php" ?>
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