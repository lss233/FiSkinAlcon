<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
    	if (!$this->request->isPost()) {
    		print_r('{"status":"0","message":"NO ACCESS"}');
    	}
    	parent::initialize();
    }
    public function static usernameCheck($vaule){
      if(UserAccount::find("username = '".$vaule."'")!=0){
          return(false);
      } else {
          return(true);
      }
    }
    public function static emailCheck($vaule){
      if(UserAccount::find("email = '".$vaule."'")!=0){
          return(false);
      } else {
          return true;
      }
    }
    public function indexAction()
    {
    	header('HTTP/1.1 403 Forbidden');
    }
    public function usernameCheckAction()
    {
      echo usernameCheck($this->request->getPost('username'));
    }
    public function emailCheckAction()
    {
      echo emailCheck($this->request->getPost('email'));
    }

}
