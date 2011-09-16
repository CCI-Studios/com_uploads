<?php

class ComUploadsDispatcher extends ComDefaultDispatcher
{
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'controller' => 'set'
		));
		
		parent::_initialize($config);
	}
	
}