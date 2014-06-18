<?php

class Baby {
    public static function create($name)
    {
        if (trim($name) != '') {
            switch($name) {
                case 'geboorte':
                    $model = 'Baby_Born';
                break;
                case 'tekst':
                    $model = 'Baby_Text';
                break;
                case 'afbeelding':
                    $model = 'Baby_Image';
                break;
            }
            return $model;
        }
    }
}