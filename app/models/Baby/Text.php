<?php

class Baby_Text extends BaseModel {

    public static $rules = array(
        'titel'    => 'Required|alphaText|Between:1,50',
        'bericht'  => 'Required|alphaText|Between:1,512',
    );
}