<?php

class SignController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    public function veriflyAction()
    {
    	$this->tag->setTitle('Sign In');

    	$username=$this->request->getPost('username');
    	$email=$this->request->getPost("email");
    	$token = md5($username.$username.$regtime); //创建用于激活识别码 
	$token_exptime = time()+60*60*24;//过期时间为24小时后 
    	$user = new UserAccount();
    	$user->username = $username;
    	$user->email = $email;
    	$user->regtime=time();
    	$user->salt=rand(100000,999999);
    	$user->password=md5('12345678'.$user->salt);
    	$user->token=$token;
    	$user->token_exptime=$token_exptime;

    	print_r(time());
    	
    	if ($user->save() == true) {

    	}
    	foreach ($user->getMessages() as $message) {
                echo $message->getMessage(), "<br/>";
            }
    }

}