<?php

class BaseModel extends Eloquent {
    
    public static $validationObject = null;
    public static $rules = array();
    
    public static function validate($input = null) {
        if (is_null($input)) {
            $input = Input::all();
        }

        self::$validationObject = Validator::make($input, static::$rules);
        
        if (self::$validationObject->passes()) {
            return true;
        } else {
            // save the input to the current session
            Input::flash();
            return false;
        }
    }
    
    public static function getValidationMessages()
    {
        return self::$validationObject->messages();
    }
    
}