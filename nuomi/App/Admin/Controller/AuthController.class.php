<?php
namespace Admin\Controller;
//use Think\Controller;

class AuthController extends InitController
{
    
	//规则列表
	 public function ruleList(){
       
		$auth_rule=M("auth_rule");
		
		$auths=$auth_rule ->where("status=1") ->select();
		$this ->assign("auths",$auths);
		
		for($i=0; $i<count($auths); $i++){
			$auth[]=$auths[$i]['name'];
			
		}
		for($j=0;$j<count($auth);$j++){
			$temName=explode('/',$auth[$j])[0];
			$temWay=explode('/',$auth[$j])[1];
			$array[0]=$temName;
			$array[1]=$temWay;
			$auths[$j]['name']=$array;
		}
		$this ->assign('auths',$auths);
		
		
	    $this ->display();
    }
	
	//添加规则
    public function addRule(){
	
       if($_POST['sub']){
			$auth=M('auth_rule');
			
			if($auth ->create()){
				if($auth ->add()){
					$this ->redirect("Auth/ruleList");
				}else{
					$this ->error("添加失败");
				}
			}else{
				$this ->error('添加失败');
			}
	   }
	   $this ->display();
    }
	
	
	
	
	//管理组列表
	
	public function groupList(){
	
		$groupList=M('auth_group');
		$groupLists=$groupList ->select();
		$this ->assign("groupLists",$groupLists);
		
		$this ->display();
	}
	
	
	
	
	
	//添加管理组
	public function addGroup(){
		//查询出所有规则
		$auth =M("auth_rule");
		if($_POST['sub']){
			$group=M("auth_group");
			$_POST['rules']=implode(',',$_POST['rules']);
			if($group -> create()){
				if($group ->add()){
					$this ->redirect("Auth/addGroup");
				}else{
					$this ->error("添加失败！");
				}
			}else{
				$this ->error("添加失败");
			}
		}
		$auths=$auth->where("status=1")->select();
		$this ->assign("auths",$auths);
		
		$this ->display();
	}

    
    
   //修改用户组
   public function modUserGroup(){
		
		
		if($_POST['sub']){
			$access=M("auth_group_access");
			if($access->create()){
				if($access ->add()){
					$this ->redirect("Index/index");
				}else{
					$this ->error('修改失败！');
				}
			}else{
				$this ->error("添加失败！");
			}
		}
		
		$group=M("auth_group");
		
		$groups=$group -> where("status=1")->select();
		
		$this ->assign("groups",$groups);
		$this -> display();
   }
    
	
	//修改状态
	
	public function status(){
		
		$this ->redirect('Auth/groupList');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//编辑管理组
	public function edit(){
		$id=$_GET['id'];
		//实例化用户组表
		$edit=M('auth_group');
		$edits=$edit -> where("id='{$id}'") ->find();
		$this ->assign("edits",$edits);
		$rules=$edits['rules'];
		
		
		
		
		//实例化规则表
		$auth_rule=M('auth_rule');
		//匹配
		$auth_rules=$auth_rule ->where("id in($rules)") ->select();
		
		$this ->assign("auth_rules",$auth_rules);
		
		for($i=0;$i<count($auth_rules);$i++){
			$authh[]=$auth_rules[$i]['id'];
		}
		
	
		
		$this ->assign("authhs",$authh);
		$auths=$auth_rule ->select();
		
		//dump($auths);exit;
		$this ->assign("auths",$auths);
		$this ->display();
	}
	
	//修改管理组
	
	public function update(){
		$id=$_POST['id'];
		//dump($_POST);

		echo '---------post----------';
		$_POST['rules'] = implode(',',$_POST['rules']);
		$auth_group = M('auth_group');
		
		if($auth_group -> create()){
			$map['id'] = $id;
			if($auth_group -> where($map) ->save()){
				$this ->error("修改成功");
			}else{
				$this ->error("修改失败");
			}
		}else{
			$this -> error('修改失败1');
		}
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//删除管理组
	public function del(){
		
		//得到id
		$id=$_GET['id'];
		//实例化auth_rule表
		$dels=M("auth_group");
		$delss=$dels->where("id={$id}")->delete();
		
		if($delss){
			$this -> redirect("Auth/groupList");
		}else{
			$this -> error("删除失败");
		}
		
		
		
		$this -> redirect('Auth/groupList');
	}
	//编辑规则列表
	
	public function mod(){
		$id=$_GET['id'];
		
		
		$auth_rule=M("auth_rule");
		$auth_rules=$auth_rule ->find($id);
		$this ->assign("auth_rules",$auth_rules);
		$na=$auth_rules['name'];
		$tem=explode('/',$na);
		$this->assign("mod",$tem);
		$this ->assign("auth",$auth_rules);
		
		
		$this ->display();
	}
	
	public function moded(){
		
		$mode = M("auth_rule");
			
			$id=$_POST['id'];
			$map['name'] = $_POST['mode'].'/'.$_POST['method'];
			$map['title'] = $_POST['title'];
			
			$info = $mode->where("id={$id}")->save($map);
			
			if($info){
				$this -> redirect("Auth/ruleList");
			}else{
				$this -> error("修改错误");
			}
		
	}
	//删除规则列表
	
	public function rule_list_del(){
		
		//实例化规则表auth_rule对象
		$rule_list_del = M("auth_rule");
		//得到要删除数据的id
		$id=$_GET['id'];
		
		$del=$rule_list_del-> where("id={$id}") -> delete(); // 删除id为$id的用户数据
		
		if($del){
			$this ->redirect("Auth/ruleList");
		}else{
			$this ->error("删除失败");
		}
	}
}












