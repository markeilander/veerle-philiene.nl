<?php 
/**
 * All html macros used in this apps
 */

HTML::macro('alert', function($type, $message, $head = null)
{
    switch ($type) {
        case 'danger': //red
            $head = $head ? $head : 'Error';
        break;
        case 'warning': //yellow
            $head = $head ? $head : 'Warning';
        break;
        case 'info': //blue
            $head = $head ? $head : 'Info';
        break;
        case 'success': //green
            $head = $head ? $head : 'Success';
        break;
    }
    if ($head) {
        return '<div class="alert alert-'. $type .'" data-dismiss="alert"><strong>'. $head .': </strong>' . $message . '</div>';
    } else {
        return '<div class="alert alert-'. $type .'" data-dismiss="alert">' . $message . '</div>';
    }
});

HTML::macro('euroFormat', function($value, $decimals = 2)
{
    return '&euro; ' .number_format($value, $decimals, ',', '.');
});