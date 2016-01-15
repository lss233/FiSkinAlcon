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
      if(CheckController::usernameCheck($username)){
        $errmsg.="用户名已存在辣~";
      }
      if(CheckController::emailCheck($email)){
        $errmsg.="邮箱已经被使用辣~";
      }
      if(!$errmsg){
    	$token = md5($username.$username.$regtime); //创建用于激活识别码
      $token_exptime = time()+60*60*24;//过期时间为24小时后
    	$user = new UserAccount();
    	$user->username = $username; //用户名
    	$user->email = $email; //邮箱
    	$user->regtime=time(); //注册时间
    	$user->salt=rand(100000,999999); //随机生成salt值
    	$user->password=md5(md5('12345678').$user->salt); //默认密码12346
    	$user->token=$token; //激活识别码
    	$user->token_exptime=$token_exptime; //验证超时时间
      if ($user->save() == true) {
            $this->tag->setTitle('注册成功 | FiSkinAlcon');
            $this->flash->success("注册成功！一封激活邮件已发往您的邮箱，请及时登录查看喵~");

    	}else {
           $this->tag->setTitle('新用户注册 | FiSkinAlcon');
           foreach ($user->getMessages() as $message) {
               $errmsg.=getMessage()."<br/>";
           }
           $this->flash->error($errmsg);
           }
         }

      }


}
