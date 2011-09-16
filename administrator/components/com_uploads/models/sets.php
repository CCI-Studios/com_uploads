<?php

class ComUploadsModelSets extends KModelTable
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_state
			->insert('enabled', 'int', 1);
	}
	
	protected function _buildQueryOrder(KDatabaseQuery $query) {
 		if (!$this->_state->sort) {
 	 		$query->order('title', 'ASC');
 		}

		parent::_buildQueryOrder($query);
 	}

	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;
		$app = JFactory::getApplication();
		
		if ($app->getName() == 'site') {
			$query->where('enabled', '=', '1');
		}
		
		parent::_buildQueryWhere($query);
	}
}