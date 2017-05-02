<?php
namespace Admin\Controller;
use Think\Area;

/**
 * 分类管理控制器
 */
class AreaController extends InitController{
   
    public function index(){
     
        $c = array("省","市","县/区");
        $city = Area::city($c);
        $this -> assign("city",$city);
    
        $this->display();
    }
    
  	public function add(){
  		$cate = M("area");
  		if($_POST['sub']){

            if($_POST['apid'] != 0){

            $parentPath = $cate -> field('apath') -> find($_POST['apid']);
            $_POST['apath'] = $parentPath['apath'].','.$_POST['apid'];

        }else{

            $parentPath = '0';
        }

  		if($cate -> create()){
            if($cate -> add()){
                $this -> redirect("area/index");
            }else{
                $this -> error("添加失败~");
            }
           }
            
      }
        $cates = $cate -> field("id,aname,apid,concat(apath,',',id) abspath") -> order('abspath') ->select();
       // echo $cate -> getlastsql();exit;
        $this -> assign("cates",$cates);

        $this -> display();

  	}

    public function del(){

       if($_POST['sub'])

        {
            $id=implode(',',$_POST['ids']);
        }else{

            $id=$_GET['id'];
        }
        $cate = M('area');
        $mape['id']=array("IN",$id);

        if($cate->where($mape)->delete())
        {
            $this->redirect("area/index");
        }else{
            $this->error("删除失败!");
        }
    }

    

    
}