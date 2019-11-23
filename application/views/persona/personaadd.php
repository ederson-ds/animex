<!-- Ion Slider -->
<link rel="stylesheet" href="<?php echo base_url() ?>plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
<!-- Ion Slider -->
<script src="<?php echo base_url() ?>plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<style>

.irs--flat .irs-bar, .irs--flat .irs-handle>i:first-child, .irs--flat .irs-bar, .irs-handle .single i,
.irs-single {
    background-color: #5093bf !important;
}

.irs-single:before {
    border-top-color: #5093bf !important;
}

</style>
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
                    <input type="text" name="age" class="form-control" placeholder="Age" value="<?php echo $persona->age; ?>">
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
                    <label>Rarity</label>
                    <select class="form-control" name="rarity">
                        <?php foreach ($rarities as $i => $rarity) { ?>
                            <option <?php echo ($persona->rarity == $i ? 'selected' : '') ?> value="<?php echo $i ?>"><?php echo $rarity ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Speed</label>
                    <input id="speed" type="text" name="speed" value="">
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

$('#speed').ionRangeSlider({
      min     : 1,
      max     : 10,
      from    : 1,
      type    : 'single',
      step    : 1,
      postfix : '',
      prettify: false,
      hasGrid : true,
      skin: "flat"
    })

</script>