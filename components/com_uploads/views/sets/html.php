<?php

class ComUploadsViewSetsHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$params = JComponentHelper::getParams('com_uploads');
		
		$this->assign('description', $params->get('description'));
	
		return parent::display();
	}

}