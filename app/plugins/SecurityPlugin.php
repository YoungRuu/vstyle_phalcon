<?php
use Phalcon\Acl;
use Phalcon\Acl\Role;
use Phalcon\Acl\Resource;
use Phalcon\Events\Event;
use Phalcon\Mvc\User\Plugin;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Acl\Adapter\Memory as AclList;
/**
* 
*/
class SecurityPlugin extends Plugin
{
	public function getAcl() {
		if (!isset($this->persistent->acl)) {
			$acl = new AclList;
			$acl->setDefaultAction(Acl::DENY);
			// Register Roles
			
				$roleAdmin = "Administrators";
				$roleMod = "Moderators";
				$roleGuest = "Guests";
				
				// Add role and inheritance roles
				$acl->addRole($roleGuest);
				$acl->addRole($roleMod);
				$acl->addRole($roleAdmin);
			/*
			*	Defined resources
			*/
			// Admin resources
			$adminResources = array(
				'index' => array('index','detail'),
				'admin' => array('index','logout','email','import'),
				'dashboard' => array('index'),
				'advertise' => array('index','delete','add','update'),
				'category' => array('index','delete','add','update'),
				'feedback' => array('index','delete','add','update'),
				'news' => array('index','delete','add','update'),
				'user' => array('index','delete','add','update')
				);
			foreach ($adminResources as $resource => $actions) {
				$acl->addResource(new Resource($resource), $actions);
			}
			// Mod resources
			$modResources = array(
				'index' => array('index','detail'),
				'admin' => array('index','logout'),
				'dashboard' => array('index'),
				'feedback' => array('index','delete','add','update'),
				'news' => array('index','delete','add','update')
				);
			foreach ($modResources as $resource => $actions) {
				$acl->addResource(new Resource($resource), $actions);
			}

			// Guests resources
			$guestResources = array(
				'index' => array('index','detail'),
				'admin' => array('index','logout')
				);
			foreach ($guestResources as $resource => $actions) {
				$acl->addResource(new Resource($resource), $actions);
			}	

			/*
			*	Grant access
			*/
			// Admin
			foreach ($adminResources as $resource => $actions) {
				foreach ($actions as $action) {
					$acl->allow('Administrators', $resource, $action);
				}
			}
			// Mod
			foreach ($modResources as $resource => $actions) {
				foreach ($actions as $action) {
					$acl->allow('Moderators', $resource, $action);
				}
			}
			// Guest
			foreach ($guestResources as $resource => $actions) {
				foreach ($actions as $action) {
					$acl->allow('Guests', $resource, $action);
				}
			}

			//The acl is stored in session, APC would be useful here too
			$this->persistent->acl = $acl;
		}
		return $this->persistent->acl;
	}
		
	public function beforeDispatch(Event $event, Dispatcher $dispatcher)
	{
        $auth = $this->session->get('loginok');
		if (!$auth) {
			$role = 'Guests';
		}else{
			if ($auth->User_idGroup == 1) {
				$role = 'Administrators';
			}
			elseif ($auth->User_idGroup == 2) {
				$role = 'Moderators';
			}
		}

		$controller = $dispatcher->getControllerName();
		$action = $dispatcher->getActionName();
		$acl = $this->getAcl();
		$allowed = $acl->isAllowed($role, $controller, $action);
		if (!$acl->isResource($controller)) {
			return $this->response->redirect('');
		}
		if ($allowed != Acl::ALLOW) {
			$this->flash->error('Bạn không có quyền truy cập trang này');
			return $this->response->redirect("dashboard");
		}
	}
	public function beforeException(){
		return $this->response->redirect('');
	}
}
?>