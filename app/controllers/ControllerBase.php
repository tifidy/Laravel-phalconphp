<?php
namespace Controllers;
use \Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function onConstruct()
    {
          $this->view->disable();

    }

   public function beforeExecuteRoute($dispatcher)
    {

    }

    public function afterExecuteRoute($dispatcher)
    {
        // Executed after every found action
    }
}
