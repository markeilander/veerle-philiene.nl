<?php namespace Eilander\Storage\Cadeau;
 
use Cadeau;
 
class EloquentCadeauRepository extends AbstractEloquentRepository implements AbstractRepository {
    
    /**
    * @var Model
    */
    protected $model;
    
    /**
    * Constructor
    */
    public function __construct(Cadeau $model)
    {
        $this->model = $model;
    }
 
}