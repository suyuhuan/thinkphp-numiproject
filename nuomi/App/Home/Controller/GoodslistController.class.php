<?php
namespace Home\Controller;
use Think\Controller;
class GoodslistController extends Controller {
    public function index(){

    	$id = $_GET['id'];
		$cate= M('goods_category');
        $good = M('goods');

        $cates = $cate -> field('id,concat(path,",",id) apath') -> find($id);
         foreach($cates as $list){
         	$data = $cate -> where("path like '{$list}%'") -> select();
         	foreach($data as $value){
         		$goods = $good -> where("cate_id = {$value[id]}") -> select();
         		 foreach($goods as $list){
         		 	$array[] = $list;
         		 }
         	}
         }
        $this -> assign("goods",$array);


    	$this->display();
		
		
    }
	
}
