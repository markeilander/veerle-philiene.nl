<?php

//create foo validation rule
Validator::extend('alphaText', function($field,$value){
    if(preg_match("/[a-zA-Z0-9?!&,.()-\s]+/", $value))
    {
        return true;
    }
    
    return false;
});