<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<div class="container">
    <div class="row" style="margin-top: 100px;">
        <div class="col-5 offset-md-3">
            <form action="<?php echo base_url() ?>persona/create/<?php echo $persona->id; ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $persona->name; ?>">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" name="age" class="form-control" placeholder="Age" value="<?php echo $persona->age; ?>">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" name="gender">
                        <?php foreach ($gender as $i => $genderr) { ?>
                            <option <?php echo ($persona->gender == $i ? 'selected' : '') ?> value="<?php echo $i ?>"><?php echo $genderr ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Species</label>
                    <select class="form-control" name="species">
                        <?php foreach ($species as $i => $specie) { ?>
                            <option <?php echo ($persona->species == $i ? 'selected' : '') ?> value="<?php echo $i ?>"><?php echo $specie ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Serie</label>
                    <select class="form-control" name="series_id">
                        <?php foreach ($series as $serie) { ?>
                            <option <?php echo ($persona->series_id == $serie->id ? 'selected' : '') ?> value="<?php echo $serie->id ?>"><?php echo $serie->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <a href="<?php echo base_url() . 'persona' ?>" class="btn btn-secondary">Back</a>
                        </div>
                        <div class="col-10">
                            <input type="submit" class="btn btn-primary form-control" value="Send">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>