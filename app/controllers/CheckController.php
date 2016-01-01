<?php

class CheckController extends \Phalcon\Mvc\Controller
{
    public function initialize()
    {
    	if (!$this->request->isPost()) {
    		print_r('{"status":"0","message":"NO ACCESS"}');
    	}
    	parent::initialize();
    }
    public function indexAction()
    {
    	header('HTTP/1.1 403 Forbidden');
    }
    public function usernameCheckAction()
    {
        if(UserAccount::find("username = '".$this->request->getPost('username')."'")!=0){
            print_r(false);
        } else {
            print_r(true);
        }
    }
    public function emailCheckAction()
    {
        if(UserAccount::find("email = '".$this->request->getPost('email')."'")!=0){
            print_r(false);
        } else {
            print_r(true);
        }
    }

}

