<?php

class BaseController extends Controller {
	protected $theme = 'melon';
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

	public function notFoundUnless($value)
	{
		if(!$value) App::abort(404);
	}

}
