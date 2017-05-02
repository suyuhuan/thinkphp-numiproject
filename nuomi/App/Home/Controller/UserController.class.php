<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        $map['id']=$_SESSION['user']['id'];
        $user=M("user");
        $data=$user->where($map)->find();
		
		//$city = array('省','市','县/区');
		//$adress = Area::city();
		
		$this -> assign('adress',$adress);
        $this->assign("user",$data);
    	$this->display();
    }
   
    public function mod(){
        $user=M("user");
        $map['id']=$_SESSION['user']['id'];
        $data=$user->where($map)->find();
        $da=$_POST;
        if($_POST['sub']){
        //判断是否有文件上传，如果没有就用原来的头像
            if($_FILES['img']['error']==4){
                $da['image'] = $data['image'];
            }else{
                //调用上传函数
                $info = $this->uppic();
                $da['image'] = $info['savepath'].$info['savename'];
                $da['id']=$_SESSION['user']['id'];
                //上传成功，调用缩放函数进行处理
                $image = new\Think\Image();
                $image-> open("Public/{$da['image']}");
                $image -> thumb(100,100,\Think\Image::IMAGE_THUMB_FILLED)->save("Public/".$info['savepath'].$info['savename']);
            }
            if($user->create($da)){
                if($user->save()){
                	$this -> modsession();
                    $this->redirect("user/index");
                }else{
                    $this->error("修改失败");
                }
            }

        }

    }
    
     private function uppic(){
        $confing = array("maxSize"=>'10240000',
            "maxSize"=>'10240000',
            "exts"=>array("jpeg","jpg","gif","png"),
            "rootPath"=>"Public/",
            "savePath"=>"Uploads/user/"
            );
        $upload = new\Think\Upload($confing);
        return $upload -> uploadOne($_FILES['img']);
     }
	/*************************************************************************************/
	//密码修改
	public function  modPwd(){
		$id = $_SESSION['user']['id'];						//登录用户的id
		$oldpwd = md5(trim($_POST['pwd']));					//处理原密码
		
		$mode = M('user');									//实例化数据对象
		$info = $mode -> where("id = {$id} and password = '${oldpwd}'") -> find();  //验证原密码
		
		if(!$info){
			$this->error('你的原密码不正确');
			exit;
		}
		
		//判断确认密码
		$pwd = trim($_POST['password']);
		$repwd = trim($_POST['nrepwd']);
		
		//判断密码是否为空
		if(empty($pwd)){
			$this->error('密码不能为空');
			exit;
		}
		
		if($pwd != $repwd){
			$this->error('你的确认密码不正确');
			exit;
		}
		
		$data['password'] = md5($pwd);
		//修改密码
		$mess = $mode -> where("id = {$id}") -> save($data);
		
		if($mess){
			$this -> modsession();
			$this->success('修改成功',__MODULE__.'/User/userset');
		}else{
			$this ->error('修改失败');
		}
	}
	
	//修改session
	private function modsession(){
		$user = M('user');
		$id = $_SESSION['user']['id'];
		$userdata = $user->where("id = {$id}")->find();
		$_SESSION['user']=$userdata;
	}

	//修改绑定手机号
	public function phone(){
		$id = $_SESSION['user']['id'];
	
		if($_POST['sub'])
		$phone = trim($_POST['phone']);
		if(empty($phone)){
			$this -> error('手机号不能为空');
			exit;
		}
		
		//匹配手机号码格式
		$info = preg_match('/(^1[3|4|5|8]\d{9})/',$phone,$tell);
		if($info == 0){
			$this->error('亲！！请输入正确格式的手机号码');
			exit;
		}
		
		//绑定手机号码
		$mode = M('user');
		$data['phone'] = $phone;
		$mess = $mode -> where("id = {$id}") -> save($data);
		if($mess){
			$this -> modsession();
			$this->success('修改成功',__MODULE__.'/User/userset');
		}else{
			$this -> error('修改失败');
		}
	}
	
	public function userset(){
		$map['id']=$_SESSION['user']['id'];
        $user=M("user");
        $data=$user->where($map)->find();
		
		$this->assign("user",$data);
		$this->display();
	}
	
	public function modUser(){
		if($_POST['sub']){
			$map['id']=$_SESSION['user']['id'];
			
			//修改数据
			if(!empty($_FILES['img']['name'])){
				$info = $this -> upload();
				$data['image'] = $info['savename'];
			}
			$data['name'] = $_POST['name'];
			$data['email'] = $_POST['email'];
			
			$mode = M('user');
			$notice = $mode ->where($map)->save($data);
			
			if($notice === false){
				$this->error('修改失败',__MODULE__.'/User/userset/');
			}else{
				$this -> modsession();
				$this -> success('修改成功',__MODULE__.'/User/userset');
			}
		}
	}
	
	//文件上传
	public function upload(){
		$upload = new \Think\Upload();
		$upload -> maxSize = 200000;
		$upload -> exts = array('jpg','gif','png','jpeg','bmp');
		$upload -> rootPath = './Public/Uploads/user/';
		$upload -> saveName = 'default';
		$upload -> autoSub = false;
		$upload -> replace = true;
		$info = $upload -> uploadOne($_FILES['img']);
	
		return $info;
	}
	

}