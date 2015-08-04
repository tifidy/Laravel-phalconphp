<?php 
namespace Libs;
use Windwalker\Renderer\BladeRenderer as BladeRenderer;
use \Libs\Response as Response;
class Blade extends BladeRenderer
{
	public function make($file, $data=null)
	{
		$res = new Response();
		if($data)
		{
			return $res->setContent($this->render($file, $data));
		}
		else
		{
			return $res->setContent($this->render($file));
		}
		
	}
}