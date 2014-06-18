<?php

class PhilieneController extends BabyController {
    
    protected $_path = '/uploads/philiene/';
    protected $_name = 'philiene';
    
    public function __construct()
    {
        parent::__construct('philiene');   
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postAdd($type, $model = null)
	{
	    return parent::postAdd($type, new Philiene());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function edit($id, $type, $model = null)
	{
	    return parent::edit($id, $type, Philiene::find($id));
	}
	public function postEdit($id, $type, $model = null)
	{
	    return parent::postEdit($id, $type, Philiene::find($id));
	}
	
	public function delete($id, $model = null)
	{
	    return parent::delete($id, Philiene::find($id));
	}
}