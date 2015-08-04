<?php

use \Phalcon\Acl as Acl;
use \Phalcon\Events\Event as Event;

use \Phalcon\Mvc\Dispatcher as Dispatcher;
namespace Libs;
class RouteFilter extends \Phalcon\Mvc\User\Plugin
{

    // ...
    public function beforeDispatch(\Phalcon\Events\Event $event, \Phalcon\Mvc\Dispatcher $dispatcher)
    {
    		//$dispatcher->getDI()->get("flash")->success("fsdfsdf");
    }

    public function beforeExecuteRoute(\Phalcon\Events\Event $event, \Phalcon\Mvc\Dispatcher $dispatcher)
    {

/*        if($dispatcher->getActionName() ==='c' || $dispatcher->getActionName() ==='b')
        {
               $dispatcher->forward(array(
                        'controller' => 'index',
                        'action'     => 'yasak'
                ));
               return false;
        }
        return;*/



/*        // Check whether the "auth" variable exists in session to define the active role
        $auth = $this->session->get('auth');
        if (!$auth) {
            $role = 'Guests';
        } else {
            $role = 'Users';
        }

        // Take the active controller/action from the dispatcher
        $controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();

        // Obtain the ACL list
        $acl = $this->getAcl();

        // Check if the Role have access to the controller (resource)
        $allowed = $acl->isAllowed($role, $controller, $action);
        if ($allowed != Acl::ALLOW) {

            // If he doesn't have access forward him to the index controller
            $this->flash->error("You don't have access to this module");
            $dispatcher->forward(
                array(
                    'controller' => 'index',
                    'action'     => 'index'
                )
            );

            // Returning "false" we tell to the dispatcher to stop the current operation
            return false;
        }*/

    }

}