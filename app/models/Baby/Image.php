<?php

class Baby_Image extends BaseModel {

    public static $rules = array(
        'titel'         => 'Required|alphaText|Between:1,50',
        'onderschrift'  => 'Required|alphaText|Between:1,50',
        'afbeelding'    => '',
    );
}