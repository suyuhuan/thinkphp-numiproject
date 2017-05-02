<?php
namespace Admin\Controller;
//use Think\Controller;

class PublishController extends InitController
{
    //获取用户列表
    public function index()
    {
       
        $this -> display();
    }
    //获取用户添加页面，添加用户
    public function add()
    {
        $user=M("user");
        if($_POST['sub'])
        {
            if(!empty($_POST['username']))
            {
                if(I('password')==I('repassword'))
                {
                    $_POST['password'] = md5($_POST['password']);
                    $data=$_POST;
                }else{
                    $this->error("两次密码不一致");
                }
            }else{
                $this->error("用户名不能为空");
            }
            $ctime = time();
            $data['ctime']=$ctime;
           if($user->create($data))
           {
            if($user->add())
            {
                $this->redirect("User/index");
            }
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