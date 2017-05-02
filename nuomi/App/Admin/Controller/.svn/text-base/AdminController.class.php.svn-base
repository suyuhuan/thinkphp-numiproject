<?php
namespace Admin\Controller;
//use Think\Controller;
class AdminController extends InitController 
{
	//获取首页
    public function index(){
    	$admin = M("admin");
        if($_GET['name']){
            $map['name']=array("LIKE","%{$_GET['name']}%");
        }
        $count = $admin->where($map)-> count();
        $Page = new\Think\Page($count,6);
        $data=$admin->where($map)->field('id,name,password,rtime,auth,status')->limit($Page-> firstRow.','.$Page-> listRows)->select();
        $this->assign("data",$data);
        $this->assign("page",$Page->show());
    	$this->display();
    }
	
	//检测管理员用户是否存在
	public function adminUsername(){
        $username = $_POST['name'];
        $map['name'] = $username;
        $data = M('admin') -> where($map) -> find();
        if(!empty($data)){
            echo 1;
        }
    }
    //添加管理员
    public function add(){
	
		//动态验证
		$rule=array(
			array('name','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
			array('name','require','用户名不能为空'), // 在新增的时候验证name字段是否唯一
		);
    	$admin = M("admin");
    	if($_POST['sub']){
    		if(!empty($_POST['name'])){
    			if(I('password')==I('repassword')){
    				$_POST['password'] = md5($_POST['password']);
    				$data = $_POST;
                    
    			}else{
    				$this->error("两次密码不一致");
    			}
    		}else{
    			$this->error("用户名不能为空");
    		}
            $rtime = time();
            $data['rtime'] = $rtime;
    		if($admin -> validate($rule) -> create($data)){
                if($admin->add()){
    	      	$this->redirect("Admin/index");
          }
    	} 	
    }
    $this->display();
}
//修改
public function mod()
{
  $admin = M('admin');
  if($_POST['sub'])
  {
    if(I('pwd'))
    {
      if(I('pwd')==I('repwd'))
      {
        $_POST['password']=md5($_POST['pwd']);
        $_POST['id']=$_POST['id'];
      }else{
        $this->error("两次密码不一致");
      }
    }else{
      unset($_POST['password']);
    }
    if($admin->create())
    {
      if($admin->save())
      {
        $this->redirect("Admin/index");
      }else{
        $this->error("修改用户名失败");
      }
    }else{
      $this->error("修改用户失败");
    }
  }else{
    $data=$admin->find($_GET['id']);
    $this->assign("mod",$data);
  }
  $this->display();
    
}
  //身份
  public function setau()
  {
      $admin=M('admin');
      $id=$_GET['id'];
      $setau = $admin->find($id);
      $where = "id=".$id;
      if($setau['auth']=='1')
      {
        $data['auth']='0';
        $admin->where($where)->save($data);
        $this->success("修改成功!");
      }else{
        $data['auth']='1';
        $admin->where($where)->save($data);
        $this->success("修改成功!");
      }
      
  }
  //权限
  public function setsta()
  {
        $admin = M('admin');
        $id=$_GET['id'];
        $setsta =$admin->find($id);
        $where="id=".$id;
        if($setsta['status']=='1')
        {
            $data['status']='0';
            $admin->where($where)->save($data);
            $this->success('修改成功!');
        }else{
            $data['status']='1';
            $admin->where($where)->save($data);
            $this->success('修改成功!');
        }
  }
  //删除
  public function del()
  {
    if($_POST['sub'])
    {
        $id=implode(',',$POST['ids']);
    }else{
         $id=$_GET['id'];
    }
    $admin = M('admin');
    $map['id']=array("IN",$id);
    if($admin->where($map)->delete())
    {
        $this-> redirect("Admin/index");
    }else{
        $this->error("删除失败");
    }
  }
}