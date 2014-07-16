<?php namespace Eilander\Storage;

abstract class AbstractEloquentRepository {
 
    /**
    * Return all
    *
    * @return Illuminate\Database\Eloquent\Collection
    */
    public function all()
    {
        return $this->model->all();
    }
  
    public function find($id)
    {
        return $this->model->find($id);
    }
    
    public function validate($input = null)
    {
        return $this->model->validate($input);
    }
 
}