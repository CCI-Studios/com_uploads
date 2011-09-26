<?php

class ComUploadsControllerFile extends ComDefaultControllerResource
{
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->registerCallback('before.get', array($this, 'checkPassword'));
	}
	
	public function checkPassword(KCommandContext $context)
	{
		$id = KRequest::get('get.uploads_set_id', 'int');
		
		if (!is_numeric($id)) {
			JFactory::getApplication()->redirect('index.php?option=com_uploads&view=sets');
		}
		
		$model = KFactory::tmp('site::com.uploads.model.sets');
		$item = $model->set('id', $id)->getItem();
		$password = KRequest::get("session.uploads.".$id, 'string');
		
		if (!$item->checkPassword($password)) {
			JFactory::getApplication()->redirect('index.php?option=com_uploads&view=sets');
		}
	}
	
}
