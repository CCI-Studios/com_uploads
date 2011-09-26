<?php

class ComUploadsViewSetsHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$params = JComponentHelper::getParams('com_uploads');
		
		$this->assign('description', $params->get('description'));
		
		$title = KRequest::get('get.title', 'string', '');
		$password = KRequest::get('get.password', 'string', '');
		if ($title || $password) {
			$this->assign('error', '<p>Invalid username or password.</p>');
		} else {
			$this->assign('error', '');
		}

		return parent::display();
	}

}