<?php

class SignController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    public function veriflyAction()
    {
    	$this->tag->setTitle('注册中。。。');

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
            $this->tag->setTitle('注册成功 | FiSkinAlcon');
            $this->flash->success("注册成功！一封激活邮件已发往您的邮箱，请及时登录查看喵~");

    	} else {
            $this->tag->setTitle('新用户注册 | FiSkinAlcon');
            $errmsg="注册失败咯,<br/>";
            foreach ($user->getMessages() as $message) {
                $errmsg.=getMessage()."<br/>"；
            }
            $this->flash->error($errmsg)
            }
        }


}