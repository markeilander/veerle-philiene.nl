<?php

class Cadeau extends BaseModel {
    
    protected $table = 'cadeau';

    public static $rules = array(
        'titel'         => 'Required|alphaText|Between:1,50',
        'omschrijving'  => 'Required|alphaText|Between:1,128',
        'winkel'        => 'Required|alphaText|Between:1,128',
        'url'           => 'Url|Between:5,512',
        'afbeelding'    => '',
        'prijs'         => 'Numeric|Between:0,500',
        'aantal'        => 'Required|Integer|Between:1,12',
        'besteld'       => 'Integer|Between:0,12',
        'volgorde'      => 'Required|Integer|Between:1,999999',
    );
}