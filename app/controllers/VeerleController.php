<?php

class VeerleController extends BabyController {
    
    protected $_path = '/uploads/veerle/';
    protected $_name = 'veerle';
    
    public function __construct()
    {
        parent::__construct('veerle');   
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postAdd($type, $model = null)
	{
	    return parent::postAdd($type, new Veerle());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function edit($id, $type, $model = null)
	{
	    return parent::edit($id, $type, Veerle::find($id));
	}
	public function postEdit($id, $type, $model = null)
	{
	    return parent::postEdit($id, $type, Veerle::find($id));
	}
	
	public function delete($id, $model = null)
	{
	    return parent::delete($id, Veerle::find($id));
	}
}