<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<style>
    .persona-img {
        width: 100%;
        height: 150px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-3">
            <a href="<?php echo base_url() . 'serie/create' ?>" class="btn btn-primary form-control" style="margin-bottom: 10px;margin-top: 10px;">Add Série</a>
        </div>
        <div class="col-3">
            <a href="<?php echo base_url() . 'persona/create' ?>" class="btn btn-primary form-control" style="margin-bottom: 10px;margin-top: 10px;">Add Persona</a>
        </div>
    </div>
    <?php foreach ($series as $serie) { ?>
        <div class="row">
            <div class="col-12">
                <div style="background: gainsboro;margin-top: 10px;margin-bottom: 10px;"><a href="<?php echo base_url() . 'serie/create/' . $serie->id ?>" style="color: black;"><?php echo $serie->name ?></a></div>
            </div>
        </div>
        <div class="row">
            <?php
                $this->load->model('personaModel');
                foreach ($this->personaModel->get_by_serie($serie->id) as $persona) { ?>
                <div class="col-sm-2">
                    <a href="<?php echo base_url() . 'persona/create/' . $persona->id ?>">
                        <img class="persona-img" src="<?php echo base_url() . 'uploads/' . $persona->id . '.jpg' ?>" alt="Card image cap" style="border: 1px solid black;">
                    </a>
                    <div style="border: 1px solid;">
                        <?php echo $persona->name; ?>
                    </div>
                    <div style="border: 1px solid;">
                        Age: <?php echo $persona->age; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>