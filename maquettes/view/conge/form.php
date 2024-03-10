<form method="POST">
    <div class="card-body">

        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputProject">personnel : <span class="text-danger">*</span></label>
                <select name="project" class="form-control js-example-basic-single" id="exampleInputProject">
                    <option value="projet1">Mohamed alami</option>
                    <option value="projet2">ahmed Alami</option>
                    <option value="projet3">jalil alami</option>
                    <option value="projet4">imran lmadani</option>
                </select>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="callout callout-success bg-light">
                        <div class="d-flex">
                            <label for="Jours-restants">Nombre du Jours restants :</label>
                            <h5 name="Jours-restants" class="pl-3" id="Jours-restants"> 18</h5>
                            <label><a href="#calcjourRestants" data-toggle="tooltip" data-placement="top" title="22 - Nombre de jours = 23 & cliquez pour plus de détails"><i class="fa-solid fa-circle-exclamation pl-3"></i></a></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="callout callout-warning bg-light">
                        <div class="d-flex">
                            <label for="Jours-possibles">Nombre du Jours possible :</label>
                            <h5 name="Jours-possibles" class="pl-3" id="Jours-possibles"> 24</h5>
                            <label><a href="#calcjourRestants" data-toggle="tooltip" data-placement="top" title="Nombre du Jours possible = 6 + Nombre du Jours restants"><i class="fa-solid fa-circle-exclamation pl-3"></i></a></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inputStartDate">Date de début : <span class="text-danger">*</span></label>
                <input name="startDate" type="date" class="form-control" id="inputStartDate" placeholder="Sélectionnez la date de début" value="2023-01-01">
            </div>

            <div class="form-group">
                <label for="inputEndDate">Date de fin : <span class="text-danger">*</span></label>
                <input name="endDate" type="date" class="form-control" id="inputEndDate" placeholder="Sélectionnez la date de fin" value="2024-02-01">
            </div>

        </div>

        <div class="card-footer w-100 d-flex justify-content-end">
            <a href="./index.php" class="btn btn-default mr-2">Annuler</a>
            <button type="submit" class="btn <?php echo (strpos($current_route, 'edit') !== false) ? 'bg-teal' : 'btn-info' ?>"><?php echo (strpos($current_route, 'edit') !== false) ? 'Modifier' : 'Ajouter'; ?></button>
        </div>
    </div>
</form>