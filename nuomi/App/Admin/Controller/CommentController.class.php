<?php
namespace Admin\Controller;

class CommentController  extends InitController{
	public function index(){
	
		//实例化评论数据表
		$comment=M("comment");
		$user=M("user");
		$goods=M("goods");
		
		//根据用户名惊醒搜索
		if($_GET['name']){
			$mode=M();
			$uname=$_GET['name'];
			
			$this -> assign('uname',$uname);
			
			$search=$mode->field("user.id uid") ->where("user.name='{$uname}'")->table("nm_user user,nm_goods goods")->select();
			
			foreach($search as $vaule){
				$uid[]=$vaule['uid'];
			}
			$str=implode(",",array_unique($uid));
		
			$map['userid'] = array('in',$str);
		}else{
			$map = '';
		}		
		
		
		
		$count = $comment-> where($map) ->count();
		$Page = new \Think\Page($count,3);
		$comments=$comment ->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
		
		//循环遍历
		for($i=0; $i<count($comments); $i++){
			$userid[]=$comments[$i]['userid'];
			$users = $user -> where("id = {$comments[$i]['userid']}") -> find();
			$goodss = $goods -> where("id = {$comments[$i]['goodid']}") -> find();
			$comments[$i]['user'] = $users['name'];
			$comments[$i]['goods'] = $goodss['name'];
		}
		
		$show = $Page->show();
		$this -> assign('page',$show);
		$this->assign("comments",$comments);
		//得到用户id
		
		
		
		$this->display();
		
		
	}
	//删除评论
	public function del(){
		
		
		$id=$_GET['id'];
		$comment=M("comment");
		
		if($comment->where("id={$id}") ->delete()){
			$this -> redirect("Comment/index");
		}else{
			$this ->error("删除失败");
		}
	}
	public function mod(){
		
	}
	
}
