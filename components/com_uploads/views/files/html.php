<?php

class ComUploadsViewFilesHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$this->_auto_assign = false;
		
		$set = KRequest::get('get.uploads_set_id', 'int');
		$password = KRequest::get('get.password', 'cmd', 
					KRequest::get("session.uploads.$set", 'cmd'));
		
		$model = KFactory::tmp('site::com.uploads.model.sets');
		$item = $model->set('id', $set)->getItem();
		
		if ($item->checkPassword($password)) {
			$this->assign('verified', true);
			$this->assign('path', $item->getPath());
			$this->assign('list', $item->getList());
			
			KRequest::set("session.uploads.$set", $password);
		} else {
			$this->assign('verified', false);
			
			KRequest::set("session.uploads.$set", null);
		}
		$this->assign('set_name', $item->title);
		$this->assign('set_id', $set);

		return parent::display();
	}
}