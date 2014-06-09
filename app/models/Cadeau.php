<?php

class Cadeau extends BaseModel {
    
    protected $table = 'cadeau';

    public static $rules = array(
        'titel'         => 'Required|alphaText|Between:1,20',
        'omschrijving'  => 'Required|alphaText|Between:1,64',
        'winkel'        => 'Required|alphaText|Between:1,128',
        'url'           => 'Url|Between:5,512',
        'afbeelding'    => '',
        'prijs'         => 'Required|Numeric|Between:1,500',
        'aantal'        => 'Required|Integer|Between:1,6',
    );
}