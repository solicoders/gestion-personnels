<form action="process_form.php" method="POST">
    <div class="card-body">

        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputProject">Colaborateur</label>
                <select name="project" class="form-control" id="exampleInputProject">
                    <option value="projet1">Mohamed alami</option>
                    <option value="projet2">ahmed Alami</option>
                    <option value="projet3">jalil alami</option>
                    <option value="projet3">imran lmadani</option>
                </select>
            </div>

            <div class="row">
                <div class="px-2 py-2 col-md-6">
                    <div class="form-group">
                        <label for="Jours-restants">Nombre du Jours restants :</label>
                        <h3 name="Jours-restants" class="form-control" id="Jours-restants">23</h3>
                    </div>
                </div>
                <div class="px-2 py-2 col-md-6">
                    <div class="form-group">
                        <label for="Jours-restants">Nombre du Jours possible :</label>
                        <h3 name="Jours-restants" class="form-control" id="Jours-restants">29</h3>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inputStartDate">Date de début</label>
                <input name="startDate" type="date" class="form-control" id="inputStartDate" placeholder="Sélectionnez la date de début" value="2023-01-01">
            </div>

            <div class="form-group">
                <label for="inputEndDate">Date de fin</label>
                <input name="endDate" type="date" class="form-control" id="inputEndDate" placeholder="Sélectionnez la date de fin" value="2024-02-01">
            </div>

        </div>

        <div class="card-footer w-100 d-flex justify-content-end">
            <a href="./index.php" class="btn btn-default mr-2">Annuler</a>
            <button type="submit" class="btn btn-info">Ajouter</button>
        </div>
</form>