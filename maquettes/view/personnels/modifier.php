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
                                    <h3 class="card-title"> <i class="nav-icon fas fa-table"></i> Modifier collaborateur
                                    </h3>
                                </div>
                                <form action="process_form.php" method="POST">
                                    <div class="card-body ">

                                        <div class="row">
                                            <fieldset class="border col-lg-12">
                                                <legend>Infos personnelles</legend>
                                                <div class="col-lg-12 d-flex">
                                                    <div class="form-group pt-3 col-lg-6">
                                                        <label for="nom" class="form-label">Nom :</label>
                                                        <input type="text" class="form-control" id="nom" name="nom"
                                                            value="Entrez le nom" required>
                                                    </div>
                                                    <!-- Nom (Arabic) -->
                                                    <div class="form-group pt-3 col-lg-6">
                                                        <label for="nomArab"
                                                            class="form-label d-flex flex-row-reverse">:
                                                            النسب</label>
                                                        <input type="text" class="form-control direction-rtl" id="nomArab"
                                                            name="nomArab" placeholder="أدخل النسب هنا" value=""
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 d-flex">
                                                    <!-- Prénom (French) -->
                                                    <div class="form-group pt-3 col-lg-6">
                                                        <label for="prenom" class="form-label">Prénom :</label>
                                                        <input type="text" class="form-control" id="prenom"
                                                            name="prenom" value="Entrez le Prénom" required>
                                                    </div>
                                                    <!-- Prénom (Arabic) -->
                                                    <div class="form-group pt-3 col-lg-6">
                                                        <label for="prenomArab"
                                                            class="form-label text-start d-flex flex-row-reverse"> :
                                                            الاسم</label>
                                                        <input type="text"
                                                            class="form-control text-end d-flex flex-row-reverse direction-rtl"
                                                            id="prenomArab" name="prenomArab"
                                                            placeholder="أدخل الاسم هنا" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 d-flex">
                                                    <!-- CIN -->
                                                    <div class="form-group pt-3 col-lg-6">
                                                        <label for="inputCIN">CIN</label>
                                                        <input name="CIN" type="text" class="form-control" id="inputCIN"
                                                            placeholder="Entrez le CIN" value="">
                                                    </div>
                                                    <!-- Date de naissance -->
                                                    <div class="form-group pt-3 col-lg-6">
                                                        <label for="inputDateDeNaiddance">Date de naissance</label>
                                                        <input name="dateNaissance" type="date" class="form-control"
                                                            id="inputDateDeNaiddance"
                                                            placeholder="Entrez le Date de naissance" value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 d-flex">
                                                    <!-- Numéro de téléphone -->
                                                    <div class="form-group pt-3 col-lg-6">
                                                        <label for="inputTelephone">Numéro de téléphone</label>
                                                        <input name="NumeroDeTelephone" type="text" class="form-control"
                                                            id="inputTelephone"
                                                            placeholder="Entrez le Numéro de téléphone" value="">
                                                    </div>
                                                    <!-- Email -->
                                                    <div class="form-group pt-3 col-lg-6">
                                                        <label for="inputEmail">Email</label>
                                                        <input name="NumeroDeEmail" type="email" class="form-control"
                                                            id="inputEmail" placeholder="Entrez le Email" value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 d-flex">
                                                    <!-- Adress -->
                                                    <div class="form-group pt-3 col-lg-6">
                                                        <label for="inputAdress">Adress</label>
                                                        <input name="NumeroDeAdress" type="text" class="form-control"
                                                            id="inputAdress" placeholder="Entrez le Adress" value="">
                                                    </div>
                                                    <!-- Ville -->
                                                    <div class="form-group pt-3 col-lg-6">
                                                        <label for="inputVille">Ville</label>
                                                        <input name="NumeroDeVille" type="text" class="form-control"
                                                            id="inputVille" placeholder="Entrez le Ville" value="">
                                                    </div>
                                                </div>

                                                <!-- Photo -->
                                                <div class="form-group pt-3 col-lg-6">
                                                    <label for="inputPhoto">Photo</label>
                                                    <input name="NumeroDePhoto" class="form-control" id="inputPhoto"
                                                        type="file">
                                                </div>

                                            </fieldset>
                                            <fieldset class="border col-lg-12 mt-4">
                                                <legend>Infos professionnelles</legend>
                                                <div class="col-lg-12 d-flex">
                                                    <div class="form-group pt-3 col-lg-6 col-6">
                                                        <label for="inputMatricule">Matricule</label>
                                                        <input name="matricule" type="text" class="form-control"
                                                            id="inputMatricule" placeholder="Entrez le matricule"
                                                            value="">
                                                    </div>
                                                    <!-- Affectation -->
                                                    <div class="form-group pt-3 col-lg-6 col-6">
                                                        <label for="inputAffectation">Affectation</label>
                                                        <input name="NumeroDeAffectation" type="text"
                                                            class="form-control" id="inputAffectation"
                                                            placeholder="Entrez le Affectation" value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 d-flex">
                                                    <!-- AFP de Travail -->
                                                    <div class="form-group pt-3 col-lg-6 col-6">
                                                        <label for="inputAFP de Travail">AFP de Travail</label>
                                                        <input name="NumeroDeAFP de Travail" type="text"
                                                            class="form-control" id="inputAFP de Travail"
                                                            placeholder="Entrez le AFP de Travail" value="">
                                                    </div>
                                                    <!-- Fonction -->
                                                    <div class="form-group pt-3 col-lg-6 col-6">
                                                        <label for="inputFonction">Fonction</label>
                                                        <input name="NumeroDeFonction" type="text" class="form-control"
                                                            id="inputFonction" placeholder="Entrez le Fonction"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 d-flex">
                                                    <div class="form-group pt-3 col-lg-6" data-select2-id="29">
                                                        <label>Type</label>
                                                        <select class="form-control select2 select2-hidden-accessible"
                                                            style="width: 100%;" data-select2-id="1" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option selected="selected" data-select2-id="3">Formateur
                                                            </option>
                                                            <option data-select2-id="34">Administrateur</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </fieldset>

                                        </div>

                                    </div>
                                </form>
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