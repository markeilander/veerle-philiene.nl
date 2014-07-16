<?php

class VeerleController extends BabyController {
    
    protected $_path = '/uploads/veerle/';
    protected $_name = 'veerle';
    protected $_model;
    
    public function __construct(Veerle $model)
    {
        parent::__construct('veerle', $model);   
    }
}