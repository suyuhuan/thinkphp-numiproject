<?php
namespace Home\Controller;
use Think\Controller;
class UserRegController extends Controller {
	 //验证用户是否存在
    public function checkUsername(){
        $username = $_POST['username'];
        $map['username']=$username;
        $data = M('user')->where($map)->find();
        if(!empty($data)){
            echo 1;
        }
    }

    //用户注册
    public function index(){
        if($_POST['sub']){       
           $user = M('user');
            //定义验证规则
            $rul = array(
                array("username",'require','用户名不能为空！'),
                array("username",'4,18','用户名长度不合法!',1,'length',1),
                array("username",'','用户名已存在!',1,'unique',1),
                array('pwd','require','密码不能为空！'),
                array('pwd','4,16','密码长度不合要求！',1,'length',3),
                array("repwd",'pwd','确认密码有误!',1,'confirm',1),
                );
            //判断验证码
            if(!$this -> check($_POST['code'])){
                $this -> error("验证码不正确");
                exit;
            }
           

             $_POST['ctime']=time();
             $_POST['password'] = md5($_POST['pwd']);

               if($user->validate($rul)->create()){

                    if($user->add()){
                        $this->redirect("UserLogin/index");
                    }
                 }else{
                    $this->error($user->getError());
                 }
            }
        
        $this->display();
    }
    //显示验证码信息
    public function regcode(){
        $config = array(
                        "length" => 4,
                        "fontsize" => 20,
                    );
        $code = new\Think\Verify($config);

        $code -> entry();
    }
    //点击更换
    private function check($c){
        $code = new \Think\Verify();
        return $code -> check($c);
    }

     
    
}