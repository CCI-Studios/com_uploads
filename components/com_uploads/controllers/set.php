<?php

class ComUploadsControllerSet extends ComDefaultControllerDefault
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->registerCallback('before.browse', array($this, 'redirectFiles'));
	}
	
	public function redirectFiles(KCommandContext $context)
	{
		$title = KRequest::get('get.title', 'string', '');
		$password = KRequest::get('get.password', 'string', '');
		
		if (!$title || !$password) {
			return;
		}
		
		$model = KFactory::tmp('site::com.uploads.model.sets');
		$items = $model
			->set('title', $title)
			->set('password', $password)
			->limit(1)
			->getList();
			
		if (count($items)) {
			$item = $items->current();
			KRequest::set("session.uploads.".$item->id, $password);
			JFactory::getApplication()->redirect('index.php?option=com_uploads&view=files&uploads_set_id='. $item->id);
		}
	}	
}
