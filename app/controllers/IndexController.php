<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
      $this->view->setTemplateAfter('main');
      Phalcon\Tag::setTitle("首页");
      parent::initialize();
    }
    public function indexAction()
    {

    }

}
