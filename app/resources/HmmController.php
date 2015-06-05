<?php
namespace Resources;
class HmmController extends \ControllerBase
{
	public function denemeAction()
	{

		return $this->view->render("Index", "test");
	}
}