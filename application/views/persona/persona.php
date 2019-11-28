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

    .col-xs-1-10,
    .col-sm-1-10 {
        position: relative;
        min-height: 1px;
    }

    .col-xs-1-10 {
        width: 10%;
        float: left;
    }

    @media (min-width: 768px) {
        .col-sm-1-10 {
            width: 10%;
            float: left;
        }
    }

    @media (min-width: 992px) {
        .col-md-1-10 {
            width: 10%;
            float: left;
        }
    }

    @media (min-width: 1200px) {
        .col-lg-1-10 {
            width: 10%;
            float: left;
        }
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
                            <img class="serieLogo" src="<?php echo getSerieImage($serie->id) ?>" alt="Serie Logo">
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
                if (!isset($searchText) || $type == 'serie') {
                    $this->load->model('personaModel');
                    $personas = $this->personaModel->get_by_serie($serie->id);
                }
                foreach ($personas as $persona) {
                    if ($persona->series_id == $serie->id) {
                        ?>
                    <div class="col-sm-1-10" style="padding: 0 !important;">
                        <div class="<?php echo PersonaModel::getRarity($persona->rarity) ?>" style="border: 1px solid;border-radius: 10px;text-align: center;width: 102px;margin-top: 10px;font-size: 10pt;">
                            <a href="<?php echo base_url() . 'persona/wiki/' . $persona->id ?>">
                                <div style="padding: 10px 10px 0;">
                                    <img class="persona-img" src="<?php echo getPersonaImage($persona->id) ?>" alt="Card image cap" style="border: 1px solid white;">
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
            <?php } ?>
        </div>
    <?php } ?>
</div>