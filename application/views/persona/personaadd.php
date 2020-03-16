<!-- Select2 -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<link rel="stylesheet" href="https://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>
<div class="container" style="padding-left: 100px">
    <div class="row" style="margin-top: 100px;">
        <div class="col-5 offset-md-3">
            <form action="<?php echo base_url() ?>persona/create/<?php echo $persona->id; ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo str_replace("-", "'", $persona->personaname); ?>">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="text" name="age" class="form-control" placeholder="Age" value="<?php echo $persona->age; ?>">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <input type="text" name="gender" class="form-control" placeholder="Gender" value="<?php echo $persona->gender; ?>">
                </div>
                <div class="form-group">
                    <label>Species</label>
                    <input type="text" name="species" class="form-control" placeholder="Species" value="<?php echo $persona->species; ?>">
                </div>
                <div class="form-group">
                    <label>Rarity</label>
                    <select class="form-control select2-single" name="rarity">
                        <?php foreach ($rarities as $i => $rarity) { ?>
                            <option <?php echo ($persona->rarity == $i ? 'selected' : '') ?> value="<?php echo $i ?>"><?php echo $rarity ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Origin Series</label>
                    <select class="form-control select2-single" name="origin_series_id">
                        <?php foreach ($series as $serie) { ?>
                            <option <?php echo ($persona->series_id == $serie->id ? 'selected' : '') ?> value="<?php echo $serie->id ?>"><?php echo $serie->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Series</label>
                    <select class="form-control select2-single" name="series_id">
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
                        <?php if (isset($id)) { ?>
                            <div class="col-2">
                                <a href="<?php echo base_url() . 'persona/delete/' . $persona->id ?>" class="btn btn-danger">Delete</a>
                            </div>
                        <?php } ?>
                        <div class="col-8">
                            <input type="submit" class="btn btn-primary form-control" value="Send">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".select2-single").select2({
            theme: "bootstrap",
            placeholder: "Select a State",
            maximumSelectionSize: 6,
            containerCssClass: ':all:'
        });
    });
</script>