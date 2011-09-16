<?php

class ComUploadsModelSets extends KModelTable
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_state
			->insert('password', 'string', '');
	}

	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;
		$app = JFactory::getApplication();
		
		if ($app->name == 'site') {
			echo "password: \"". $state->password ."\"";
		}
		
		
		parent::_buildQueryWhere($query);
	}
}