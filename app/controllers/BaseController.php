<?php

class BaseController extends Controller {
    
    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => array('post', 'delete', 'put')));
        $this->beforeFilter('ajax', array('on' => array('post','delete', 'put')));
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	
	protected function uploadImage($fileInput, $default = '') {
        if (Input::hasFile($fileInput)) {
            // make randowm string and set destination
            $destinationPath = $this->_path;
            $fileToken = str_random(4).'-'.str_random(6).'-'.str_random(3); // make as random as possible
            // make path
            if (!file_exists(public_path().$destinationPath)) {
                File::makeDirectory(public_path().$destinationPath, 0775, true);
            }
            // get file object
            $file = Input::file($fileInput);
            $filename = $fileToken.'.'.$file->getClientOriginalExtension();
            // move
            $upload_success = $file->move(public_path().$destinationPath, $filename);
            if( $upload_success ) {
                return $destinationPath.$filename;
            }
        }
        return $default;
    }

}