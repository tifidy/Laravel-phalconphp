<?php
namespace Resources;
class DeneController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function buAction()
    {
    	$this->view->disable();
    	return \Response::setJsonContent(["aaa" => ""]);
    }

}

