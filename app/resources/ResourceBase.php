<?php
namespace Resources;
use \Phalcon\Mvc\Controller;
class ResourceBase extends Controller
{
    public function onConstruct()
    {
          $this->view->disable();

    }

   public function beforeExecuteRoute($dispatcher)
    {
        if(\Auth::guest() === true)
        {
            $dispatcher->forward(array(
                    'namespace' => 'Controllers',
                    'controller' => 'Login',
                    'action'     => 'index'
            ));
            return false;
        }
    }

    public function afterExecuteRoute($dispatcher)
    {
        // Executed after every found action
    }
}
