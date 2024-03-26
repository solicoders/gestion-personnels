<form action="process_form.php" method="POST">
    <div class="card-body ">

        <div class="row">
            <fieldset class="border col-lg-12">
                <legend>Infos personnelles</legend>
                <div class="col-lg-12 d-flex">
                    <div class="form-group pt-3 col-lg-6">
                        <label for="nom" class="form-label">Nom : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nom" name="nom" value="Entrez le nom" required>
                    </div>
                    <!-- Nom (Arabic) -->
                    <div class="form-group pt-3 col-lg-6">
                        <label for="nomArab" class="form-label d-flex flex-row-reverse"> :
                            النسب<span class="text-danger">*</span> </label>
                        <input type="text" class="form-control direction-rtl" id="nomArab" name="nomArab" placeholder="أدخل النسب هنا" value="العلمي" required>
                    </div>
                </div>
                <div class="col-lg-12 d-flex">
                    <!-- Prénom (French) -->
                    <div class="form-group pt-3 col-lg-6">
                        <label for="prenom" class="form-label">Prénom : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="alami" required>
                    </div>
                    <!-- Prénom (Arabic) -->
                    <div class="form-group pt-3 col-lg-6">
                        <label for="prenomArab" class="form-label text-start d-flex flex-row-reverse"> :
                            الاسم <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control text-end d-flex flex-row-reverse direction-rtl" id="prenomArab" name="prenomArab" placeholder="أدخل الاسم هنا" value="محمد" required>
                    </div>
                </div>
                <div class="col-lg-12 d-flex">
                    <!-- CIN -->
                    <div class="form-group pt-3 col-lg-6">
                        <label for="inputCIN">CIN : <span class="text-danger">*</span></label>
                        <input name="CIN" type="text" class="form-control" id="inputCIN" placeholder="Entrez le CIN" value="KB21839">
                    </div>
                    <!-- Date de naissance -->
                    <div class="form-group pt-3 col-lg-6">
                        <label for="inputDateDeNaiddance">Date de naissance : <span class="text-danger">*</span></label>
                        <input name="dateNaissance" type="date" class="form-control" id="inputDateDeNaiddance" placeholder="Entrez le Date de naissance" value="01/08/1980">
                    </div>
                </div>
                <div class="col-lg-12 d-flex">
                    <!-- Numéro de téléphone -->
                    <div class="form-group pt-3 col-lg-6">
                        <label for="inputTelephone">Numéro de téléphone : <span class="text-danger">*</span></label>
                        <input name="NumeroDeTelephone" type="text" class="form-control" id="inputTelephone" placeholder="Entrez le Numéro de téléphone" value="+21276453537">
                    </div>
                    <!-- Email -->
                    <div class="form-group pt-3 col-lg-6">
                        <label for="inputEmail">Email : <span class="text-danger">*</span></label>
                        <input name="NumeroDeEmail" type="email" class="form-control" id="inputEmail" placeholder="Entrez le Email" value="mohamedAlami@gmail.com">
                    </div>
                </div>
                <div class="col-lg-12 d-flex">
                    <!-- Adress -->
                    <div class="form-group pt-3 col-lg-6">
                        <label for="inputAdress">Adress : <span class="text-danger">*</span></label>
                        <input name="NumeroDeAdress" type="text" class="form-control" id="inputAdress" placeholder="Entrez le Adress" value="Complex hassani">
                    </div>
                    <!-- Ville -->
                    <div class="form-group pt-3 col-lg-6">
                        <label for="inputVille">Ville : </label>
                        <input name="NumeroDeVille" type="text" class="form-control" id="inputVille" placeholder="Entrez le Ville" value="Tanger">
                    </div>
                </div>

                <!-- Photo -->
                <div class="form-group">

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>

            </fieldset>
            <fieldset class="border col-lg-12 mt-4">
                <legend>Infos professionnelles</legend>
                <div class="col-lg-12 d-flex">
                    <div class="form-group pt-3 col-lg-6 col-6">
                        <label for="inputMatricule">Matricule : <span class="text-danger">*</span></label>
                        <input name="matricule" type="text" class="form-control" id="inputMatricule" placeholder="Entrez le matricule" value="8934749634">
                    </div>
                    <!-- Affectation -->
                    <div class="form-group pt-3 col-lg-6 col-6">
                        <label for="inputAffectation">Affectation : <span class="text-danger">*</span></label>
                        <input name="NumeroDeAffectation" type="text" class="form-control" id="inputAffectation" placeholder="Entrez le Affectation" value="Solicode">
                    </div>
                </div>
                <div class="col-lg-12 d-flex">
                    <!-- AFP de Travail -->
                    <div class="form-group pt-3 col-lg-6 col-6">
                        <label for="inputAFP de Travail">AFP de Travail</label>
                        <input name="NumeroDeAFP de Travail" type="text" class="form-control" id="inputAFP de Travail" placeholder="Entrez le AFP de Travail" value="Solicode">
                    </div>
                    <!-- Fonction -->
                    <div class="form-group pt-3 col-lg-6 col-6">
                        <label for="inputFonction">Fonction : <span class="text-danger">*</span></label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected" data-select2-id="3">Développer</option>
                            <option data-select2-id="34">comptable</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 d-flex">
                    <div class="form-group pt-3 col-lg-6" data-select2-id="29">
                        <label>Type</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected" data-select2-id="3">Formateur</option>
                            <option data-select2-id="34">Administrateur</option>
                        </select>
                    </div>
                </div>

            </fieldset>

        </div>

    </div>
</form>