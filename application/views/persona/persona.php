<div class="container">
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
                    <a href="<?php echo base_url() . 'persona/wiki/' . $persona->id ?>">
                        <img class="persona-img" src="<?php
                                                                if (file_exists($_SERVER['DOCUMENT_ROOT'] . verifyLocalhost() . '/uploads/' . $persona->id . '.png')) {
                                                                    echo base_url() . 'uploads/' . $persona->id . '.png';
                                                                } else {
                                                                    echo base_url() . 'uploads/' . $persona->id . '.jpg';
                                                                }
                                                                ?>" alt="Card image cap" style="border: 1px solid black;">
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