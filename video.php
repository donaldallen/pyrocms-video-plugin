<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Plugin_video extends Plugin
{
	function youtube()
	{
		$id	= ($this->attribute('id') ? $this->attribute('id') : 'oHg5SJYRHA0');
		$width	= ($this->attribute('width') ? $this->attribute('width') : '100%');
		$height	= ($this->attribute('height') ? $this->attribute('height') : '315');
		
		return '<iframe src="http://www.youtube.com/embed/'.$id.'" width="'.$width.'" height="'.$height.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	}
	
	function vimeo()
	{
		$id	= ($this->attribute('id') ? $this->attribute('id') : '42722025');
		$width	= ($this->attribute('width') ? $this->attribute('width') : '100%');
		$height	= ($this->attribute('height') ? $this->attribute('height') : '315');
		
		return '<iframe src="http://player.vimeo.com/video/'.$id.'" width="'.$width.'" height="'.$height.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	}
}

/* End of file Plugin_video.php */