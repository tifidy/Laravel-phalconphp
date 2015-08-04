<?php 
namespace Libs;
class Request extends \Phalcon\Http\Request
{
	public function get($name = NULL, $filters = NULL, $defaultValue = NULL)
	{
		return parent::get($name, $filters, $defaultValue);
	}
}