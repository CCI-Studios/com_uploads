<?php

class ComUploadsViewFilesHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$this->_auto_assign = false;
		
		$set = KRequest::get('get.uploads_set_id', 'int');
		$model = KFactory::tmp('site::com.uploads.model.sets');
		$item = $model->set('id', $set)->getItem();
		
		$this->assign('path', $item->getPath());
		$this->assign('list', $item->getList());
		$this->assign('set_name', $item->title);
		$this->assign('set_id', $set);

		return parent::display();
	}
}