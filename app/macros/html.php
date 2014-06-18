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

HTML::macro('dutchDate', function($value, $format = '%d %B %Y')
{
    return strftime($format, strtotime($value));
});

HTML::macro('dutchTime', function($value, $format = '%H:%M')
{
    return strftime($format, strtotime($value));
});

HTML::macro('euroFormat', function($value, $decimals = 2, $euro = true)
{
    if ($value == '0.01') {
        return '?';
    }
    if ($euro) {
        return '&euro; ' .number_format($value, $decimals, ',', '.');
    } else {
        return number_format($value, $decimals, ',', '.');
    }
});

HTML::macro('oddeven', function($name = 'default', $even = '', $odd = '')
{
	static $status = array();

	if (!isset($status[$name]))
	{
		$status[$name] = 0;
	}

	$status[$name] = 1 - $status[$name];
	return ($status[$name] % 2 == 0) ? $even : $odd;
});