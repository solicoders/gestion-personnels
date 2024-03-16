<!DOCTYPE html>
<html lang="fr">

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
                            <h1>Décision de congé Administratif</h1>
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
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body ">
                                    <div class=" d-flex justify-content-center">
                                        <img src="../assets/images/logo-ofppt.png" class="logoOfppt" alt="logo ofppt">
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
                                            <li class="h6">le Directeur de l'Office de la Formation Professionnelle et
                                                de La
                                                Promotion du Travail;</li>
                                            <li class="h6">Vu Le Dahir portant loi N°1-72-183 RabiaII 1394 (21 Mai 1974)
                                                instituant
                                                l'Office de la Formation Professionnelle et de La Promotion du Travail;
                                            </li>
                                            <li class="h6">Vu la décision de madame le Directeur Général N°11 en Date du
                                                19/01/2022
                                                portant Délégation de signature a Monsieur ABDELHAMID ELMECHRAFI
                                                Directeur de
                                                Complex Tanger 1;</li>
                                        </ul>
                                        <h5 class="pt-3">Vu la demande de congé Administratif présentée par : Mme/Mr:
                                            Nom Prenom,
                                            affecté a CFP Tanger\Centre\ Solicode Tanger.</h5>
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
                                    <section class="col-12 mt-3 footer">
                                        <div class="mt-5">
                                            <p class="display-5 font-weight-bold text-capitalize text-center">
                                                Complexe de formation professionnelle tanger 1
                                            </p>
                                            <div class="row">
                                                <div class="col font-weight-bold firstPartOfFoter">
                                                    Directeur Regionale DRTTA <br> CFP Tanger 1
                                                </div>
                                                <div class="col">
                                                    <ul>
                                                        <li class="text-uppercase">ISTA NTIC</li>
                                                        <li class="text-capitalize">Km 06, Route de Rabat- tanger</li>
                                                        <li>Téléphone : 05 39 38 08 71</li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <ul>
                                                        <li class="text-uppercase">ISTA IBN MARHAL</li>
                                                        <li class="text-capitalize">5 Rue Ibn Marhal, Place Mozart
                                                            Tanger</li>
                                                        <li>Téléphone : 05 39 94 00 97</li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <ul>
                                                        <li class="text-uppercase">Solicode Tanger</li>
                                                        <li class="text-capitalize">Quartier Bmi Ouaryaghel Allé C
                                                            Tanger</li>
                                                        <li>Téléphone : 05 39 30 88 85</li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <ul>
                                                        <li class="text-capitalize">Centre National mohamed 6 des
                                                            handicapés Tanger Souani
                                                            Tanger</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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