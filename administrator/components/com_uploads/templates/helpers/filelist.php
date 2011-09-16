<?php

class ComUploadsTemplateHelperFilelist extends KTemplateHelperDefault
{
	
	public function files($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'list' => array(),
			'recurse' => true,
			'path' => '',
		));
		
		$html  = '<div class="folder_list">';
		$html .= $this->_renderList($config->list->toArray(), $config->path, $config->recurse);
		$html .= '</div>';
		
		return $html;
	}
	
	protected function _renderList($list, $path, $recurse)
	{
		$html  = '<ul>';
		
		foreach ($list as $index=>$file) {
			if (is_array($file)) {
				$html .= '<li class="folder">';
				$html .= $index; // recurse;
				$html .= $this->_renderList($file, $path . $index .'/', $recurse);
				$html .= '</li>';
			} else {
				$html .= '<li>';
				$html .= '<a href="'.$path . $file .'">';
				$html .= $file;
				$html .= '</a>';
				$html .= '</li>';
			}
		}
		
		$html .= '</ul>';
		
		return $html;
	}

}