<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller 
{

	//获取登录界面的操作、执行登录
    public function index(){
	
		if($_POST['sub']){
			
			
			//查询nm_admin数据表中的数据
			$admin = M('admin');
			//用户传过来的账号和密码
			$map['name']=$_POST['adminname'];
			$map['password']=md5($_POST['password']);
			$data = $admin ->where($map) -> find();
			
			//数据库中查询出的账号和密码
			if($data){
				$_SESSION['admin']=$data;
				$_SESSION['isLogin']=1;
				$aid=$_SESSION['id'];
				
				$this ->redirect("Index/index");
				
			}else{
				$this ->error('用户名或密码不正确！',U("Login/index"),0);
			}
			
		}
		
		$this->display();
		
    }
	
	
    //退出登录
    public function logout()
    {
    	session("admin",null);
		$this ->redirect("Login/index");
    }
}