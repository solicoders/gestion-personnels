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


            <div class="content-wrapper pt-4" style="min-height: 1302.4px;">

                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Attestaion de travail</h1>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <button id="printButton" class="btn bg-purple"><i class="fa-solid fa-print"></i>
                                        Imprimer</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <section class="content px-4 mx-4 card">
                    <div class=" d-flex justify-content-start mb-4">
                        <img src="../assets/images/logo-ofppt.png" alt="" height="130px" width="auth">
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <p>N/REF: OFP/DRTTA/CFPT1/SOLICODE/N°25/2023</p>
                        <p>Tanger le 30/11/2022</p>
                    </div>
                    <div class="border py-3 my-4 text-center">
                        <h2 class="">Attestaion de travail</h2>
                    </div>
                    <div class="mt-2">
                        <p>L'office de la Formation Professionnelle et de la Promotion du Travail attest que
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <div class="d-flex">
                            <div>
                                 <p>Monsieur</p>
                            <p>Matricule</p>
                            <p>Est employée au sein de nos services</p>
                            <p>En qualité de</p>
                            <p>Grade</p>
                            <p>Date de recrutement</p>
                            <p>Affectation</p>
                            </div>
                            <div>
                            <p style="margin-left:15rem">: Rachid Madani</p>
                            <p style="margin-left:15rem">: 123456</p>
                            <p>.</p>
                            <p style="margin-left:15rem">: Gestionnaire de stagiaires</p>
                            <p style="margin-left:15rem">: Maitrise principale</p>
                            <p style="margin-left:15rem">: 24/02/2020</p>
                            <p style="margin-left:15rem">: CFPT1 Tanger/Centre Solidaire Digital Tanger</p>

                            </div>

                        </div>
                        <div class="col-sm-12 mt-4">
                            <p>La présente attestation est délivrée à l'intéressée pour servir et valoir ce que de droit.</p>
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end mt-4 mb-4">
                            <div>
                                <h4>Directeur de complexe</h4>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 px-4">
                       
                    </div>
                    <!-- footer -->
                    <footer class="d-flex align-items-end border-top pt-2">
                        <div>
                            <div class="text-center">
                                <p class="font-weight-bold pl-5 ml-5">Complex de Formation Professionnelle Tanger 1
                                </p>
                            </div>
                            <div class="d-flex justify-content-between w-100">
                                <h6 class="font-weight-bold">Direction Réglenal DRTTA CFP Tanger</h6>
                                <h6 class="">ISTA NTIC Km 06, Route de Rabat Tanger Tel : 06 39 38 08 71</h6>
                                <h6 class="">ISTA IBN MARHAL 5Rue Ibn Marhal, Place Mozart Tanger Tel : 0539 380871</h6>
                                <h6 class="">Centre solicode Digitale Quartier Bni Ouryaghel Tanger</h6>
                                <h6 class="">Centre National mohamed 6 des handicapés Tanger Souani Tanger</h6>
                            </div>
                        </div>
                    </footer>

                </section>
            </div>

        </div>

    </div>

    <!-- Inclure le script -->
    <script>
        document.getElementById("printButton").addEventListener("click", function () {
            window.print();
        });
    </script>
</body>


</html>