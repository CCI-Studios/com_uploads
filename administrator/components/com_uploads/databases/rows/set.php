<?php

class ComUploadsDatabaseRowSet extends KDatabaseRowDefault
{
	
	protected $_list;
	protected $_path = '/media/com_uploads/uploads/';
	
	public function getList()
	{
		if (!$this->folder)
			return array();
		
		if (!$this->_list) {
			$this->_list = $this->_getFiles(JPATH_SITE . $this->getPath(), true);
		}
		
		return $this->_list;
	}
	
	public function getPath()
	{
		return $this->_path . $this->folder .'/';
	}
	
	public function checkPassword($password)
	{
		return ($this->password == $password);
	}
	
	protected function _getFiles($path, $recurse = false)
	{
		$files = array();
		$dirs = array();
		
		if (is_dir($path)) {
			$temp = scandir($path);
			
			foreach ($temp as $file) {				
				if (is_dir($path .'/'. $file) && $file !== '.' && $file !== '..' && $recurse) {
					$dirs[$file] = $this->_getFiles($path .'/'. $file, $recurse);
				} else if ($file !== '.' && $file !== '..') {
					$files[] = $file;
				}
			}
		}
		
		natcasesort($files);
		$files = array_merge($dirs, $files);
		return $files;
	}
}