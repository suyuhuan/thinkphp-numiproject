<?php
namespace Home\Controller;
use Think\Controller;
class MoviedetailController extends Controller{
    
    public function index(){
    	$moviedetail = M('movie');
    	$data = $moviedetail -> select();
    	$this -> assign("details",$data);
    	$this->display();
    }
}