<?php

class Baby_Born extends BaseModel {

    public static $rules = array(
        'titel'   => 'Required|alphaText|Between:1,75',
        'gewicht' => 'Required|integer|Between:2200,4000',
        'lengte'  => 'Required|integer|Between:45,65',
    );
}