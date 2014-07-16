<?php namespace Eilander\Storage\Philiene;
 
use Philiene;
 
class EloquentPhilieneRepository extends AbstractEloquentRepository implements AbstractRepository {
    
    /**
    * @var Model
    */
    protected $model;
    
    /**
    * Constructor
    */
    public function __construct(Philiene $model)
    {
        $this->model = $model;
    }
 
}