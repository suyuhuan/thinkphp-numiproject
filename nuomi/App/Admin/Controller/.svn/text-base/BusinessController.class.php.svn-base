<?php
namespace Admin\Controller;
use Think\Controller;
class BusinessController extends Controller 
{
	//获取首页
    public function index(){
    	$business = M('business');
    	//dump($business);
    	$data = $business -> select();
    	$this -> assign("business",$data);
    	$this->display();
    }
}