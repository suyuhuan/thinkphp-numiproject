<?php
namespace Home\Controller;
use Think\Controller;
class CommentController extends Controller {
	public function index(){
		 $map['id']=$_GET['id'];
		 //dump($stute);
		 $order = M('order');
		 $data=$order->where($map)->find();
		 //dump($data);
		 $this->assign('order',$data);
		$this->display();
	}
	public function addComment(){
		if($_POST['sub']){
		 $comm = M("comment");
		 $_POST['comtime']=time();
		 if($_POST['state']==4){
		 	$_POST['stute']=0;
		 }else{
		 	$_POST['stute']=1;
		 }
		 $order = M('order');
		 $map['id']=$_POST['orderid'];
		 $data['state']='5';
		 $order->where($map)->save($data);
		 if($comm->create()){
		 		if($comm->add()){
			 		$this->redirect("Order/index");
			 	}	
		 	}
		 }
		 
           
		}
}