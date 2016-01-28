<?php

class PmController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    public function jsonAction()
    {
      if($this->request->getPost("token")==NULL || $this->request->getPost("token")=="NULL"){
        print_r('[{"sender":"System","time":"'.time().'","text":"请登录！"}]');
      }
    }

}
