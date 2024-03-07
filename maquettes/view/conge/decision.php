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
                                <h1>Liste des congés</h1>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <button id="printButton" class="btn bg-purple"><i class="fa-solid fa-print"></i> Imprimer</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <section class="content px-4 mx-4 card">
                    <div class=" d-flex justify-content-center">
                        <img src="../assets/images/logo-ofppt.jpeg" alt="" height="130px" width="auth">
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <p>REF: OFP/DRTTA/CFP1/SOLICODE/N 38/22</p>
                        <p>Tanger le 30/11/2022</p>
                    </div>
                    <div class="border py-3 my-4 text-center">
                        <h2 class="">DECISION DE CONGE ADMINISTRATIF</h2>
                    </div>
                    <div class="mt-2">
                        <ul>
                            <li class="h6">le Directeur de l'Office de la Formation Professionnelle et de La Promotion du Travail;</li>
                            <li class="h6">Vu Le Dahir portant loi N°1-72-183 RabiaII 1394 (21 Mai 1974) instituant l'Office de la Formation Professionnelle et de La Promotion du Travail;</li>
                            <li class="h6">Vu la décision de madame le Directeur Général N°11 en Date du 19/01/2022 portant Délégation de signature a Monsieur ABDELHAMID ELMECHRAFI Directeur de Complex Tanger 1;</li>
                        </ul>
                        <h5 class="pt-3">Vu la demande de congé Administratif présentée par : Mme/Mr: Nom Prenom, affecté a CFP Tanger\Centre\ Solicode Tanger.</h5>
                    </div>
                    <h4 class="text-center pt-5 pb-4">DECIDE</h4>
                    <div>
                        <h4 style="text-decoration: underline;">ARTICLE UNIQUE :</h4>
                        <h5 class="mt-3">Il est accordé un congé : Administratif</h5>
                        <table class="table table-bordered mt-4">
                            <thead>
                                <tr>
                                    <th>NOM & PRENOM</th>
                                    <th>AFFECTATION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CHEBEB FATIN</td>
                                    <td>CFP TANGER 1 / CENTRE SOLICODE TANGER</td>
                                </tr>
                                <tr>
                                    <td>Catégorie : C</td>
                                    <td>Durée accordée : 8Jours</td>
                                </tr>
                                <tr>
                                    <td>Fonction : Formatrice</td>
                                    <td>Date debut : 04/12/2022</td>
                                </tr>
                                <tr>
                                    <td>Fonction : Formatrice</td>
                                    <td>Date fin : 11/12/2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="py-5 px-4">
                        <h5>NB : L'intéressée est autorisée a quittele territoire marocain</h5>
                    </div>
                    <!-- footer -->
                    <footer class="d-flex align-items-end border-top pt-2">
                        <div>
                            <div class="text-center">
                                <h5 class="font-weight-bold pl-5 ml-5">Complex de Formation Professionnelle Tanger 1</h5>
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
        document.getElementById("printButton").addEventListener("click", function() {
            window.print();
        });
    </script>
</body>


</html>