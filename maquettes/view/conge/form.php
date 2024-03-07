<form action="process_form.php" method="POST">
    <div class="card-body">

        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputProject">Colaborateur : <span class="text-danger">*</span></label>
                <select name="project" class="form-control" id="exampleInputProject">
                    <option value="projet1">Mohamed alami</option>
                    <option value="projet2">ahmed Alami</option>
                    <option value="projet3">jalil alami</option>
                    <option value="projet3">imran lmadani</option>
                </select>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="callout callout-success bg-light">
                        <div class="d-flex">
                            <label for="Jours-restants">Nombre du Jours restants :</label>
                            <h5 name="Jours-restants" class="pl-3" id="Jours-restants"> 1</h5>
                            <label><a href="#calcjourRestants" data-toggle="tooltip" data-placement="top" title="22 - Nombre de jours = 23 & cliquez pour plus de détails"><i class="fa-solid fa-circle-exclamation pl-3"></i></a></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="callout callout-warning bg-light">
                        <div class="d-flex">
                            <label for="Jours-restants">Nombre du Jours possible :</label>
                            <h5 name="Jours-restants" class="pl-3" id="Jours-restants"> 7</h5>
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
            <button type="submit" class="btn btn-info">Ajouter</button>
        </div>
</form>

</section>
<section class="content" id="calcjourRestants">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info c">
                    <div class="card-header col-md-12">
                        <div class="">
                            <div class="">
                                <div class="">
                                    <div class="d-flex">
                                        <label for="Jours-restants text-dark">Nombre du Jours restants =</label>
                                        <h5 name="Jours-restants" class="pl-3" id="Jours-restants"> 22 - Nombre de jours</h5>
                                        <!-- <label><a href="#calcjourRestants" data-toggle="tooltip" data-placement="top" title="22 - Nombre de jours = 23 & cliquez pour plus de détails"><i class="fa-solid fa-circle-exclamation pl-3"></i></a></label> -->
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <div class="d-flex">
                                        <label for="Jours-restants">Nombre du Jours possible :</label>
                                        <h5 name="Jours-restants" class="pl-3" id="Jours-restants"> Nombre du Jours restants + 6</h5>
                                        <!-- <label><a href="#calcjourRestants" data-toggle="tooltip" data-placement="top" title="Nombre du Jours possible = 6 + Nombre du Jours restants"><i class="fa-solid fa-circle-exclamation pl-3"></i></a></label> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="">
                            <h4><span class="text-dark h3">Nombre du Jours restants</span> = 22 - Nombre de jours </h4>
                            <h4><span class="text-dark h3">Nombre du Jours possible</span> = Nombre du Jours restants + 6</h4>
                        </div> -->
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <th>Date départ</th>
                                    <th>Date retour</th>
                                    <th class="text-center">Nombre de jours</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2024-02-28</td>
                                    <td>2024-03-2</td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">
                                        <a href="./show.php" class='btn btn-default btn-sm'>
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2024-02-28</td>
                                    <td>2024-03-2</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">
                                        <a href="./show.php" class='btn btn-default btn-sm'>
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2024-02-28</td>
                                    <td>2024-03-2</td>
                                    <td class="text-center">7</td>
                                    <td class="text-center">
                                        <a href="./show.php" class='btn btn-default btn-sm'>
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2024-02-28</td>
                                    <td>2024-03-2</td>
                                    <td class="text-center">6</td>
                                    <td class="text-center">
                                        <a href="./show.php" class='btn btn-default btn-sm'>
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
</div>

</section>