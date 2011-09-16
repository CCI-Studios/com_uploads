<?php

class ComUploadsTemplateHelperListbox extends ComDefaultTemplateHelperListbox
{
	
	public function sets( $config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'		=> 'sets',
			'name' 		=> 'uploads_set_id',
			'value'		=> 'id',
			'text'		=> 'title',
			'prompt'	=> '- Select Set -',
			'attribs'    => array('id' => $config->name)
		));

		return parent::_listbox($config);
	}
	
	
}