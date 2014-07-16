<?php

class PhilieneController extends BabyController {
    
    protected $_path = '/uploads/philiene/';
    protected $_name = 'philiene';
    protected $_model;
    
    public function __construct(Philiene $model)
    {
        parent::__construct('philiene', $model);   
    }
}