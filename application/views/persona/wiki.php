<div class="container">
    <div class="row">
        <div class="col-sm-2 offset-sm-4">
            <a href="<?php echo base_url() . 'persona/create/' . $persona->id ?>">
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
    </div>
</div>