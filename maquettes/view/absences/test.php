<div class="form-group">
    <label for="exampleInputProject">Personnels</label>
    <select name="project" class="form-control personnel" id="personnel">
        <option value="1">Lamchatab Amine</option>
        <option value="2">Achaou Hamid</option>
        <option value="3">Sarsri Imran</option>
    </select>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script>
    $(document).ready(function() {
        $('.personnel').select2();
    });
</script>
