<?php
namespace Home\Controller;
use Think\Controller;
class loginController extends Controller {

	public function login(){
		$this->display();
	}
	public function info(){
		if(empty(I('username'))) {
            $this->error('帐号错误！');
        }elseif (empty(I('passward'))){
            $this->error('密码必须！');
        }
		$m=M('user');
        $m->username=I('username');
        $m->passward=I('passward');
        $condition['username'] = I('username');
        // 把查询条件传入查询方法
        $User = $m->where($condition)->find(); 
        $passward = $User['passward'];
        
        
            if($passward!=I('passward')){
                $this->error('账号密码错误!');
            }else{
            $_SESSION['username']=I('username');
            $this->display();



        
	}
}
}
