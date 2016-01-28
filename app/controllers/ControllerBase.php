<?php
use \Phalcon\MVC\Controller;
class ControllerBase extends Controller
{
  protected function initialize()
  {
      $config=new \Phalcon\Config();
      $this->tag->prependTitle('FiSkinAlcon | ');
      if($config->dev->debug){
        echo "<code>\n------DEBUG MESSAGE------";
        if($this->request->isPost()) {
          print_r($this->request->getPost());
        }
        echo "</code>\n------DEBUG MESSAGE------";
      }
  }
}
