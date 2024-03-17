<form action="process_form.php" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="inputNom">personnels : <span class="text-danger">*</span></label>
            <select name="project" class="form-control" id="exampleInputProject" required>
                <option value="projet1">Choisir un personnels</option>
                <option value="Hamouda">Hamouda</option>
                <option value="Saad">Saad</option>
                <option value="Niema">Niema</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputNom">Echell : <span class="text-danger">*</span></label>
            <select name="project" class="form-control" id="exampleInputProject" required>
                <option value="projet1">Selectioné l'echell</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
                <option value="3">5</option>
                <option value="3">6</option>
                <option value="3">7</option>
                <option value="3">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputNom">Echellen : <span class="text-danger">*</span></label>
            <select name="project" class="form-control" id="exampleInputProject" required>
                <option value="projet1">Selectioné l'echellen</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>

        <div class="form-group">
            <label for="inputStartDate">Date de début : <span class="text-danger">*</span></label>
            <input name="startDate" type="date" class="form-control" id="inputStartDate" placeholder="Sélectionnez la date de début" value="2023-01-01" required>
        </div>

        <div class="form-group">
            <label for="inputEndDate">Date de fin : <span class="text-danger">*</span></label>
            <input name="endDate" type="date" class="form-control" id="inputEndDate" placeholder="Sélectionnez la date de fin" value="2024-02-01" required>
        </div>

    </div>

    <div class="card-footer">
        <a href="./index.php" class="btn btn-default">Annuler</a>
        <button type="submit" class="btn btn-info">Ajouter</button>
    </div>
</form>
