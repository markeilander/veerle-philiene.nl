<?php

class Gekocht extends BaseModel {
    
    protected $table = 'gekocht';

    public static $rules = array(
        'email'           => 'Required|Email|Between:5,128',
    );

}