<style>
    #personaName {
        text-align: center;
        display: block;
        font-size: 18pt;
        background: #026575;
        font-weight: bold;
        color: white;
    }
</style>
<div class="container" style="margin-top: 133px;">
    <div class="row">
        <div class="col-8" style="background: gray;">
            <div class="description" style="margin: 15px;">
                The path of the martial artist is like a flame. Practicing the martial arts will only cause pain. The dangers are countless and the road is filled with obstacles. Everyone who walks down it will eventually turn to ash, but the true martial artist will be reborn from these ashes. Even if I was only a small and weak moth, I will walk into the flames without hesitation. I will fight my destiny for a one in a million chance that I will experience my own samsara and be reborn into a flaming phoenix. And even now, I am no longer a moth.
                </br></br>
                Lin Ming is the main character of the novel Martial World. Once a common youth with average talent, until he found a strange cube that changed his destiny and set him on the path to becoming the greatest cultivator in the 33 heavens and 18 abysses.
                <div class="header" style="background: tomato;margin: 20px 0;">
                    Powers and Stats
                </div>
                <div>
                    <b>Tier:</b> At Least <b>Low 1-C,</b> Possibly 1-A
                </div>
                <div style="margin: 20px 0;">
                    <b>Power and Abilities:</b> Meta Army Manipulation, Absolute Charisma, Reality Warping, Yin and Yang Manipulation, Life and Death Manipulation, All Elements Manipulation, Dream Manipulation, Immortality (Type 1,2,3,4 and 5) and more...
                </div>
            </div>
        </div>
        <div class="col-4" style="background: blue;width: 310px;flex: 0;">
            <div class="row" id='personaName'>
                <?php echo $persona->name ?>
            </div>
            <div class="row" style="text-align: center;display: block;">
                <a href="<?php echo base_url() . 'persona/create/' . $persona->id ?>">
                    <img src="<?php echo getPersonaImage($persona->id) ?>" alt="Character Image" style="border: 1px solid white;" width="310" height="413">
                </a>
            </div>
            <div class="row">
                <div class="col-6">
                    Species:
                </div>
                <div class="col-6">
                    <?php echo $persona->species ?>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Gender:
                </div>
                <div class="col-6">
                    <?php echo $persona->gender ?>
                </div>
            </div>
        </div>
    </div>
</div>