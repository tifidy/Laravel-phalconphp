<?php
namespace Controllers;
class ErrorController extends ControllerBase
{

    public function route404Action()
    {

/*    	$d = CorePost::find();
    	
    	foreach($d as $z)
    	{
    		echo $z->name."<br>";
    	}*/
 
/*        echo $this->view->render("index.inde");*/

/*        $this->view->disable();*/
/*		echo $this->viewb->render("index.inde");*/
		//Response::setContentType('application/json', 'UTF-8');
        echo "BULUNAMADI";
        //return Blade::render("index.inde", ["wow" => ["lol","sss","ddd"]]);
		//return $response->setContent(json_encode(array("status" => "OKçşiçişçğüğ"), JSON_UNESCAPED_UNICODE));
        //return Response::setJsonContent(array("status" => "OKçşiçişçğüğ"), JSON_UNESCAPED_UNICODE);
    }

   public function deniedAction()
    {
        echo "Login Required";
    }

}