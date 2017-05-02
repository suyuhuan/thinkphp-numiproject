<?php
	namespace Admin\Controller;
	use Think\Controller;
	
	class InitController extends Controller{
		
		public function _initialize(){
			
			
			if($_SESSION['isLogin']!=1){
				
				$this -> error('请先登录',U("Login/index"),1);
			}
			
		//得到管理员id
		$aid = $_SESSION['admin']['id'];
        
		if($aid == 1){
			
            return true;
        }
       //权限检测
	   //对规则进行认证
	   //$auth ->check(规则名称,用户id)一个用户可以隶属多个用户组
	   //CONTROLLER_NAME 当前控制器名  ACTION_NAME 当前操作名 
        $rule = CONTROLLER_NAME.'/'.ACTION_NAME;
        $auth = new \Think\Auth();
        if($auth -> check($rule,$aid)){
            return true;
        }else{
           
            $this -> error("你没有权限");
        }
		
		}
	}
	
?>