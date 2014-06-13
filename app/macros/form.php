<?php 
/**
 * All form macros used in this apps
 */
 

Form::macro('bootstrapLabel', function($for, $name, $col = 'col-sm-2')
{
    return Form::label($for, $name, array('class' => $col .' control-label'));
});

Form::macro('bootstrapText', function($id, $value, $placeholder)
{
    return Form::text($id, Form::getValueAttribute($id), array('class' => 'form-control input-sm', 'placeholder' => $placeholder));
});

Form::macro('bootstrapNumeric', function($id, $value, $placeholder)
{
    return '<input class="form-control input-sm" placeholder="'.$placeholder.'" name="'.$id.'" type="number" value="'.Form::getValueAttribute($id).'" id="'.$id.'">';
});

Form::macro('bootstrapUrl', function($id, $value, $placeholder)
{
    return '<input class="form-control input-sm" placeholder="'.$placeholder.'" name="'.$id.'" type="url" value="'.Form::getValueAttribute($id).'" id="'.$id.'">';
});

Form::macro('bootstrapEmail', function($id, $value, $placeholder)
{
    return '<input class="form-control input-sm" placeholder="'.$placeholder.'" name="'.$id.'" type="email" value="'.Form::getValueAttribute($id).'" id="'.$id.'">';
});

Form::macro('bootstrapTextarea', function($id, $value, $placeholder, $rows = 3, $cols = 10)
{
    return Form::textarea($id, Form::getValueAttribute($id), array('class' => 'form-control input-sm', 'placeholder' => $placeholder, 'size' => $cols.'x'.$rows));
});