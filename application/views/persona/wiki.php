<style>
    #personaName {
        text-align: center;
        display: block;
        font-size: 18pt;
        background: #002A32;
        font-weight: bold;
        line-height: 40px;
        color: white;
    }

    .header {
        line-height: 35px;
        background: #002A32;
        margin: 20px 0;
        text-align: center;
        font-family: Palatino, Palatino Linotype, Palatino LT STD, Book Antiqua, Georgia, serif;
        font-size: 20px;
        font-weight: bold;
        color: white;
    }
</style>
<div class="container" style="margin-top: 133px;">
    <div class="row">
        <div class="col-8" style="background: #003838; color: #FDD1BF">
            <a href="<?php echo base_url() . 'persona/edit/' . str_replace(' ', '_', $persona->name) . '/' . str_replace(' ', '_', $origin_series_name) ?>">
                <img src="<?php echo base_url() . 'dist/settings.png' ?>" alt="Edit" style="float: right;">
            </a>
            <div class="description" style="margin: 15px;">
                <?php if (!isset($description)) { ?>
                    <?php
                   
                        $this->load->helper('interpreter');
                        echo teste($persona->description);
                        ?>
                    <div style="font-style: italic;">
                        "The path of the martial artist is like a flame. Practicing the martial arts will only cause pain. The dangers are countless and the road is filled with obstacles. Everyone who walks down it will eventually turn to ash, but the true martial artist will be reborn from these ashes. Even if I was only a small and weak moth, I will walk into the flames without hesitation. I will fight my destiny for a one in a million chance that I will experience my own samsara and be reborn into a flaming phoenix. And even now, I am no longer a moth."
                    </div>
                    <div class="header">
                        Summary
                    </div>
                    Lin Ming is the main character of the novel Martial World. Once a common youth with average talent, until he found a strange cube that changed his destiny and set him on the path to becoming the greatest cultivator in the 33 heavens and 18 abysses.
                    <div class="header" style="line-height: 35px; background: #002A32;margin: 20px 0;text-align: center; font-family: Palatino, Palatino Linotype, Palatino LT STD, Book Antiqua, Georgia, serif; font-size: 20px; font-weight: bold; color: white;">
                        Powers and Stats
                    </div>
                    <div>
                        <b>Tier:</b> At Least <b>Low 1-C,</b> Possibly <b>1-A</b>
                    </div>
                    <div style="margin: 20px 0;">
                        <b>Power and Abilities:</b> Meta Army Manipulation, Absolute Charisma, Reality Warping, Yin and Yang Manipulation, Life and Death Manipulation, All Elements Manipulation, Dream Manipulation, Immortality (Type 1,2,3,4 and 5) and more...
                    </div>
                <?php } else { ?>
                    [text] = italic <br>
                    [[text]] = bold <br>
                    {text} = title
                    <form action="<?php echo base_url() ?>persona/edit/<?php echo $persona->name; ?>" method="post">
                        <textarea class="form-control" name="description" rows="20" cols="50" style="width: 100%;"><?php echo $persona->description ?></textarea>
                        <div class="form-group" style="margin-top: 10px;">
                            <div class="row">
                                <div class="col-4">
                                    <a href="<?php echo base_url() . 'persona/wiki/' . str_replace(' ', '_', $persona->name) . '/' . str_replace(' ', '_', $origin_series_name)  ?>" class="btn btn-secondary form-control">Back</a>
                                </div>
                                <div class="col-8">
                                    <input type="submit" class="btn btn-primary form-control" value="Send">
                                </div>
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
        <div class="col-4" style="background: #544C4D; color: #D5D4D4;width: 310px;flex: 0;">
            <div class="row" id='personaName'>
                <?php echo $persona->name ?>
            </div>
            <div class="row" style="text-align: center;display: block;">
                <a href="<?php echo base_url() . 'persona/create/' . str_replace(' ', '_', $persona->name) . '/' . str_replace(' ', '_', $origin_series_name) ?>">
                    <img src="<?php echo getPersonaImage($persona->id) ?>" alt="Character Image" width="310" height="413">
                </a>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Chinese:</b>
                </div>
                <div class="col-6">
                    林铭
                </div>
            </div>
            <div class="row" style="text-align: center;display: block;font-size: 13pt;margin-bottom: 5px;margin-top: 5px;background: #002A32;font-weight: bold;line-height: 35px;color: white;">
                Physical Description
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Species:</b>
                </div>
                <div class="col-6">
                    <?php echo $persona->species ?>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Gender:</b>
                </div>
                <div class="col-6">
                    <?php echo $persona->gender ?>
                </div>
            </div>
            <div class="row" style="text-align: center;display: block;font-size: 13pt;margin-bottom: 5px;margin-top: 5px;background: #002A32;font-weight: bold;line-height: 35px;color: white;">
                Stats
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Ranking:</b>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Overall Tier:</b>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Appearance:</b>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Charisma:</b>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Achievements:</b>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Power:</b>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Resistance:</b>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Intelligence:</b>
                </div>
            </div>
            <div class="row" style="text-align: center;display: block;font-size: 13pt;margin-bottom: 5px;margin-top: 5px;background: #002A32;font-weight: bold;line-height: 35px;color: white;">
                Origin
            </div>
            <div class="row">
                <div class="col-6">
                    <b>First:</b>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <b>Other:</b>
                </div>
            </div>
        </div>
    </div>
</div>