<form action="process_form.php" method="POST">
    <fieldset class="border col-lg-12 pb-3">
        <legend>Informations de mission</legend>
        <div class="row">
            <div class="form-group col-lg-6 col-12">
                <label for="inputStartDate">Personnel <span class="text-danger">*</span></label>
                <input name="startDate" type="text" class="form-control" id="inputStartDate"
                    placeholder="Sélectionnez la date de début" value="madani ali">
            </div>

            <div class="form-group col-lg-6 col-12">
                <label for="inputEndDate">Numéro de mission <span class="text-danger">*</span></label>
                <input name="endDate" type="" class="form-control" id="inputEndDate"
                    placeholder="Sélectionnez la nom mission" value="102">
            </div>

            <div class="form-group col-lg-6 col-12">
                <label for="inputEndDate">Nature <span class="text-danger">*</span></label>
                <input name="endDate" type="" class="form-control" id="inputEndDate"
                    placeholder="Sélectionnez la nature" value="">
            </div>
            <div class="form-group col-lg-6 col-12">
                <label for="inputDescription">Type de mission <span class="text-danger">*</span></label>
                <input name="nombreDuJour" type="text" class="form-control" id="nombreDuJour"
                    placeholder="Sélectionnez Type de mission" value="Voyage d'affaires">
            </div>
            <div class="form-group col-lg-6 col-12">
                <label for="inputDescription">Numéro d'ordre de mission <span class="text-danger">*</span></label>
                <input name="nombreDuJour" type="text" class="form-control" id="nombreDuJour"
                    placeholder="Sélectionnez Numéro d'ordre de mission" value="12">
            </div>
            <div class="col-12 col-lg-6">
                <label for="date-de-fin">Moyens de transport <span class="text-danger">*</span></label>
                <select class="form-control">
                    <option>Voiture de personnel</option>
                    <option>Transport public</option>
                    <option>Voiture de mission</option>
                </select>
            </div>
            <div class="col-12 row">
                <div class="col-lg-6 col-12">
                    <label for="inputDescription">Marque <span class="text-danger">*</span></label>
                    <input name="nombreDuJour" type="text" class="form-control" id="nombreDuJour"
                        placeholder="Sélectionnez Numéro d'ordre de mission" value="Toyota">
                </div>
                <div class="col-lg-6 col-12">
                    <label for="inputDescription">Numéro de plaque <span class="text-danger">*</span></label>
                    <input name="nombreDuJour" type="text" class="form-control" id="nombreDuJour"
                        placeholder="Sélectionnez Numéro d'ordre de mission" value="ABC123">
                </div>
                <div class="col-lg-6 col-12 pt-3">
                    <label for="inputDescription">Puissance fiscale <span class="text-danger">*</span></label>
                    <input name="nombreDuJour" type="text" class="form-control" id="nombreDuJour"
                        placeholder="Sélectionnez Puissance fiscale" value="4cv">
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset class="border col-lg-12 pb-2">
        <legend>Planning de mission</legend>
        <div class="row">
            <div class="form-group col-lg-6 col-12">
                <label for="Lieu">Lieu <span class="text-danger">*</span></label>
                <input name="Lieu" type="text" class="form-control" id="Lieu" placeholder="Sélectionnez " value="Rabat">
            </div>

            <div class="form-group col-lg-6 col-12">
                <label for="date-de-fin">Date d'ordre de mission <span class="text-danger">*</span></label>
                <input name="date-de-fin" type="date" class="form-control" id="date-de-fin" placeholder="Sélectionnez "
                    value="2024-02-10">
            </div>
            <div class="form-group col-lg-6 col-12">
                <label for="date-début">Date début <span class="text-danger">*</span></label>
                <input name="date-début" type="date" class="form-control" id="date-début" placeholder="Sélectionnez "
                    value="2024-02-15">
            </div>
            <div class="form-group col-lg-6 col-12">
                <label for="date-de-fin">Date de fin <span class="text-danger">*</span></label>
                <input name="date-de-fin" type="date" class="form-control" id="date-de-fin" placeholder="Sélectionnez "
                    value="2024-02-20">
            </div>
            <div class="form-group col-lg-6 col-12">
                <label for="date-de-fin">Date de départ <span class="text-danger">*</span></label>
                <input name="date-de-fin" type="date" class="form-control" id="date-de-fin" placeholder="Sélectionnez "
                    value="2024-02-14">
            </div>
            <div class="form-group col-lg-6 col-12">
                <label for="date-de-fin">Heure de départ <span class="text-danger">*</span></label>
                <input name="date-de-fin" type="text" class="form-control" id="date-de-fin" placeholder="Sélectionnez "
                    value="14H00">
            </div>
            <div class="form-group col-lg-6 col-12">
                <label for="date-de-fin">Date de retour <span class="text-danger">*</span></label>
                <input name="date-de-fin" type="date" class="form-control" id="date-de-fin" placeholder="Sélectionnez "
                    value="2024-02-21">
            </div>
            <div class="form-group col-lg-6 col-12">
                <label for="date-de-fin">Heure de retour <span class="text-danger">*</span></label>
                <input name="date-de-fin" type="text" class="form-control" id="date-de-fin" placeholder="Sélectionnez "
                    value="14H00">
            </div>
        </div>
    </fieldset>

    <div class="card-footer d-flex justify-content-end">
        <a href="./index.php" class="btn btn-default">Annuler</a>
        <button type="submit" class="btn btn-info ml-2">Ajouter</button>
    </div>
</form>