<form method="POST">
    <div class="card-body">

        <div class="card-body">

            <div class="form-group">
                <label for="exampleInputProject">Personnel : <span class="text-danger">*</span></label>
                <select name="project" class="form-control js-example-basic-single" id="exampleInputProject">
                    <option value="projet1">Mohamed alami</option>
                    <option value="projet2">ahmed Alami</option>
                    <option value="projet3">jalil alami</option>
                    <option value="projet4">imran lmadani</option>
                </select>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Nombre du Jours restants</span>
                            <span class="info-box-number text-center text-muted mb-0">2300</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Nombre du Jours possible</span>
                            <span class="info-box-number text-center text-muted mb-0">2000</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text text-center text-muted"><button type="button"
                                    class="btn btn-block btn-default" data-toggle="modal"
                                    data-target="#modal-lg">Détails du calcul</button></span>
                            <!-- <span class="info-box-number text-center text-muted mb-0">20</span> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="callout callout-success bg-light">
                        <div class="d-flex">
                            <label for="Jours-restants">Nombre du Jours restants :</label>
                            <h5 name="Jours-restants" class="pl-3" id="Jours-restants"> 9</h5>
                            <label><a href="#calcjourRestants" data-toggle="tooltip" data-placement="top" title="jours restants dernières années + 22 - Nombre de jours"><i class="fa-solid fa-circle-exclamation pl-3"></i></a></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="callout callout-warning bg-light">
                        <div class="d-flex">
                            <label for="Jours-possibles">Nombre du Jours possible :</label>
                            <h5 name="Jours-possibles" class="pl-3" id="Jours-possibles"> 15</h5>
                            <label><a href="#calcjourRestants" data-toggle="tooltip" data-placement="top" title="Nombre du Jours possible = 6 + Nombre du Jours restants"><i class="fa-solid fa-circle-exclamation pl-3"></i></a></label>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Motif -->
            <div class="form-group">
                <label for="inputAffectation">Motif : <span class="text-danger">*</span></label>
                <select name="NumeroDeAffectation" class="form-control" id="inputAffectation">
                    <option value="Solicode" selected>Mariage</option>
                    <option value="ISTA NTIC" selected>Vacances</option>
                    <option value="Ibn marhal" selected>Maternité</option>
                    <option value="Ibn marhal" selected>Personnel</option>
                </select>
            </div>


            <div class="form-group">
                <label for="inputStartDate">Date de début : <span class="text-danger">*</span></label>
                <input name="startDate" type="date" class="form-control" id="inputStartDate"
                    placeholder="Sélectionnez la date de début" value="2023-01-01">
            </div>

            <div class="form-group">
                <label for="inputEndDate">Date de fin : <span class="text-danger">*</span></label>
                <input name="endDate" type="date" class="form-control" id="inputEndDate"
                    placeholder="Sélectionnez la date de fin" value="2024-02-01">
            </div>
        </div>

        <div class="card-footer w-100 d-flex justify-content-end">
            <a href="./index.php" class="btn btn-default mr-2">Annuler</a>
            <button type="submit" class="btn <?php echo strpos($current_route, 'edit') !== false ? 'bg-teal' : 'btn-info'; ?>"><?php echo strpos($current_route, 'edit') !== false ? 'Modifier' : 'Ajouter'; ?></button>
        </div>
    </div>
</form>
