<?php namespace Eilander\Storage\Veerle;
 
use Veerle;
 
class EloquentPhilieneVeerleRepository extends AbstractEloquentRepository implements AbstractRepository {
    
    /**
    * @var Model
    */
    protected $model;
    
    /**
    * Constructor
    */
    public function __construct(Veerle $model)
    {
        $this->model = $model;
    }
 
}