<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

	 //获取首页的全部内容，广告、商品分类、不同分类下是商品遍历
    public function index(){

    	$this ->assign("category",M("goods_category")->select());

        
        $class = M('goods_category');
        $classg = M('goods');
    	$classs = $class -> field('id,name,concat(path,",",id) apath') -> where('pid = 0') -> select();
        foreach($classs as $value){
            $data = $class -> where("path like '{$value[apath]}%'") -> select();
            foreach($data as $value1){
                $data1 = $classg -> where("cate_id = {$value1['id']}") -> select();
                foreach($data1 as $value2){
                    $array[$value['name']][] = $value2;
                }
                
            }
        }
         $adv=M("advert");
         $tgg = $adv->where("place=1")->limit('1')->order("ctime desc")->find();
         $advdata = $adv->where("place=0")->limit('3')->order("ctime desc")->select();
         $dj = $adv->where("place=3")->limit('1')->order("ctime desc")->find();
         $xgg = $adv->where("place=4")->limit('1')->order("ctime desc")->find();
         $this->assign("tgg",$tgg);
         $this->assign("dj",$dj);
         $this->assign("xgg",$xgg);
         $this->assign("adv",$advdata);
        $this -> assign("goods",$array);
       
    	$this->display();
    }   
    
    //得到订单
    public function getorder(){

    }
    
}