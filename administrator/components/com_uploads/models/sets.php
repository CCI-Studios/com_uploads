<?php

class ComUploadsModelSets extends KModelTable
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_state
			->insert('title', 'string')
			->insert('password', 'string')
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
			$query->where('tbl.enabled', '=', '1');
		}
		
		if ($state->title) {
			$query->where('tbl.title', '=', $state->title);
		}
		
		if ($state->password) {
			$query->where('tbl.password', '=', $state->password);
		}		
		
		parent::_buildQueryWhere($query);
	}
}