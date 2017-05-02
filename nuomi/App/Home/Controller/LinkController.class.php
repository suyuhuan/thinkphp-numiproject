<?php
namespace Home\Controller;
use Think\Controller;
class LinkController extends Controller {
	

	//查询数据、展示页面
	public function index(){
		
		$link=M("links");
		$links=$link -> where("type=1")->select();
		
		$this -> assign("links",$links);
		$linkss=$link -> where("type=0")->select();
		
		$this -> assign("linkss",$linkss);
		$this ->display();
	}
	
}