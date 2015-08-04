<?php
namespace Resources;
class IndexController extends ResourceBase
{

    public function indexAction()
    {
/*        \Flash::error("this is debug message, you don't say");
        return \Response::redirect(array(
            "for"        => "abc"
        ));*/
        //var_dump($this->flash->error);
       //$this->session->set("de", ["a", "b"=> "z<"]);

        //if($this->session->has("de")) var_dump($this->session->get("de"));
    	//return \Response::setContent(\Blade::render("index.index"));
        //var_dump(\Auth::loginUsingId(2));

        
    /*       \Auth::loginUsingId(1);
          // \Auth::logout();
            var_dump( \Auth::user()->toArray());*/
            var_dump(\Auth::guest());
            echo "Home page";
    }

    public function aAction()
    {
		return \Response::setContent(\Blade::render("index.index"));
    }
   public function bAction()
    {
    		echo "B sayfası";
    }
   public function cAction()
    {
    		echo "C sayfası";
    }
   public function yasakAction()
    {
        echo "gitmeye çalıştığınız route yasaklıa!";
    }
}
