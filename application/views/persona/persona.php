<style>
    .very-rare {
        background: #1f6ba0;
        color: #90b8ff;
    }

    .epic {
        background: #681f69;
        color: #c844ff;
    }

    .legendary {
        background: #ce9238;
        color: #ffe7b0;
    }

    .serieLogo {
        width: 200px;
    }

    body {
        background: gainsboro;
    }
</style>

<div class="container">
    <?php foreach ($series as $serie) { ?>
        <div class="row">
            <div class="col-12">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                    <div class="row" style="text-align: center;line-height: 100px;">
                        <div class="col-4">
                            <a href="<?php echo base_url() . 'serie/create/' . $serie->id ?>" style="color: black;"><b><?php echo $serie->name ?></b></a>
                        </div>
                        <div class="col-4">
                            <img class="serieLogo" src="<?php
                                                            if (file_exists($_SERVER['DOCUMENT_ROOT'] . verifyLocalhost() . '/uploads/series/' . $serie->id . '.png')) {
                                                                echo base_url() . 'uploads/series/' . $serie->id . '.png';
                                                            } else {
                                                                echo base_url() . 'uploads/series/' . $serie->id . '.jpg';
                                                            }
                                                            ?>" alt="Serie Logo">
                        </div>
                        <div class="col-4">
                            <a href="<?php echo base_url() . 'serie/create/' . $serie->id ?>" style="color: black;"><b><?php echo $serie->name ?></b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $this->load->model('personaModel');
                foreach ($this->personaModel->get_by_serie($serie->id) as $persona) { ?>
                <div class="col-sm-2">
                    <div class="<?php echo PersonaModel::getRarity($persona->rarity) ?>" style="border: 1px solid;border-radius: 10px;text-align: center;">
                        <a href="<?php echo base_url() . 'persona/wiki/' . $persona->id ?>">
                            <div style="padding: 10px 10px 0;">
                                <img class="persona-img" src="<?php
                                                                        if (file_exists($_SERVER['DOCUMENT_ROOT'] . verifyLocalhost() . '/uploads/' . $persona->id . '.png')) {
                                                                            echo base_url() . 'uploads/' . $persona->id . '.png';
                                                                        } else {
                                                                            echo base_url() . 'uploads/' . $persona->id . '.jpg';
                                                                        }
                                                                        ?>" alt="Card image cap" style="border: 1px solid white;">
                            </div>

                        </a>
                        <div style="">
                            <?php echo $persona->name; ?>
                        </div>
                        <div style="">
                            <?php echo PersonaModel::$rarityType[$persona->rarity]; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>