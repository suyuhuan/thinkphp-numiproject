<?php
namespace Home\Controller;
use Think\Controller;
class UserLoginController extends Controller{
    
    public function index(){

    	 if($_POST['sub']){
    	 	$user=M('user');

    	    $map['username']=$_POST['name'];
    	    $map['password']=md5($_POST['pwd']);
    	    $userdata = $user->where($map)->find();

    	    if($userdata){
    	    	$_SESSION['user']=$userdata;
    	    	$this->redirect("Index/index");
    	    }else{
    	    	$this->error("用户名或密码不正确!");
    	    }
    	 }
    	$this->display();
    }
    public function loginOut(){
        unset($_SESSION['user']);
        $this -> redirect('Index/index');
    }
}