<?php

class ComUploadsViewSetHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$item = $this->getModel()->getItem();
		$this->assign('path', $item->getPath());
		$this->assign('list', $item->getList());
		
		return parent::display();
	}
}