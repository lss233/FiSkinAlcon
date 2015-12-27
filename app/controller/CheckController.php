<?php

class CheckController extends \Phalcon\Mvc\Controller
{
    public function initialize()
    {
    	if (!$this->request->isPost()) {
    		print_r('{"status":"0","message":"NO ACCESS"}');
    		die;
    	}
    	parent::initialize();
    }
    public function indexAction()
    {
    	header('HTTP/1.1 403 Forbidden');
    }
    public function usernameCheckAction()
    {

    }

}

