<?php
namespace Admin\Controller;
//use Think\Controller;

class UserController extends InitController
{
    //获取用户列表
    public function index()
    {
        $user=M("user");
        if($_GET['name']){
            $map['username']=array('LIKE',"%{$_GET['name']}%");
        }
        $count = $user->where($map)-> count();
        $Page = new\Think\Page($count,10);
        $data = $user->where($map)->field('id,username,password,email,ctime,status')->limit($Page-> firstRow.','.$Page-> listRows)->select();
        $this->assign("data",$data);
        $this->assign("page",$Page->show());
        $this -> display();
    }

    //检测用户是否存在
    public function checkUsername(){
        $username = $_POST['username'];
        $map['username'] = $username;
        $data = M('user') -> where($map) -> find();
        if(!empty($data)){
            echo 1;
        }
    }
	
    //获取用户添加页面，添加用户
    public function add()
    {
         if($_POST['sub']){
             $user=M("user");
             //定义验证规则
             $rul = array(
                array("username",'require','用户名不能为空！'),
                
                array("username",'4,18','用户名长度不合法!',1,'length'),
                array('username','','用户名已存在！',1,'unique',1),
                array('password','require','密码不能为空'),
                array("password",'6,33','密码长度不合要求',1,'length'),
                array('repassword','password','密码确认有误',1,'confirm'),
                );

            
           $_POST['ctime'] = time();
           $_POST['password'] = md5($_POST['pwd']);
           $_POST['repassword'] = md5($_POST['repwd']);
           if($user->validate($rul)->create())
           {
            if($user->add())
            {
                $this->redirect("User/index");
            }
           }else{
            $this->error($user -> getError());
           }
        }

        $this->display();

    }
    //设置上下线
    public function setsta()
    {
      $user = M("user");
      $id=$_GET['id'];
      $setsta = $user->find($id);
      $where = "id=".$id;
      if($setsta['status']=='1')
      {
        $data['status']='0';
        $user->where($where)->save($data);
        $this->success('修改成功!');
      }else{
        $data['status']='1';
        $user->where($where)->save($data);
        $this->success('修改成功!');
      }
    }
    //获取用户信息
    public function user()
    {
        $user=M("user");
        $id=$_GET['id'];
         $data = $user->find($id);
         $this->assign("uses",$data);
        $this->display();
    }
   
    //删除用户
    public function del()
    {
        if($_POST['sub'])
        {
            $id=implode(',',$POST['ids']);
        }else{
            $id=$_GET['id'];
        }
        $user = M('user');
        $mape['id']=array("IN",$id);
        if($user->where($mape)->delete())
        {
            $this->redirect("User/index");
        }else{
            $this->error("删除失败!");
        }
    }
    
   
    //权限设置
    // public function setAuth(){}
}