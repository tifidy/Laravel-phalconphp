<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {

    	$d = CorePost::find();
    	
    	foreach($d as $z)
    	{
    		echo $z->name."<br>";
    	}
 


    	//View::disable();
        //$this->view->disable();
		
		Response::setContentType('application/json', 'UTF-8');
		//return $response->setContent(json_encode(array("status" => "OKçşiçişçğüğ"), JSON_UNESCAPED_UNICODE));
        return Response::setJsonContent(array("status" => "OKçşiçişçğüğ"), JSON_UNESCAPED_UNICODE);
    
    }

}