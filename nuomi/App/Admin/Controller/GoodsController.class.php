<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller 
{

	//获取商品
    public function index(){
        $mod = M("goods");
        $count = $mod-> count();

        $Page = new\Think\Page($count,6);

        $list = $mod -> limit($Page-> firstRow.','.$Page-> listRows) -> select();
        $catePage = $Page -> show();
        $this->assign("page",$Page->show());
        $this -> assign("good",$list);

        $cate = M("goods_category");
        $data = $cate -> select();
        $this -> assign("cate",$data);

        $area = M("area");
        $data = $area -> select();
        $this -> assign("areas",$data);

       

    	$this->display();
    }

    //获取商品的分类
    public function add(){

        $goods = M('goods');
        if($_POST['sub']){
            //dump($_POST);exit;
        $_POST['img'] = $this -> upload();

           
          if($goods -> create()){
            if($goods -> add()){
                $this -> redirect("goods/index");
            }
          }else{
            $this -> error("添加商品失败！");
          }
        }

        $cate = M('goods_category');
        $cates = $cate -> field("id,name,pid,concat(path,',',id) abspath") -> order('abspath') ->select();
        $this -> assign("cates",$cates);

        $area = M('area');
        $areas = $area -> field("id,aname,apid,concat(apath,',',id) abspath") -> order('abspath') ->select();
        $this -> assign("areas",$areas);

        $this -> display();

    }

    private function upload(){
        $upload = new\Think\Upload();
        $upload -> maxSize = 100000000;
        $upload -> exts = array('jpeg','jpg','png','gif');
        $upload -> rootPath = "./Public/";
        $upload -> savePath = "Goods_Upload/";
        $info = $upload -> uploadOne($_FILES['img']);
        //dump($info);
        return $info['savepath'].$info['savename'];
    }
    



    //获取商品和商品的分类  （单条数据页面遍历不需要用$符号）
    public function edit(){


           
    
        $cate = M('goods_category');
        $cates = $cate -> field("id,name,pid,concat(path,',',id) abspath") -> order('abspath') ->select();
        $this->assign("cates",$cates);

        $area = M('area');
        $areas = $area -> field("id,aname,apid,concat(apath,',',id) abspath") -> order('abspath') ->select();
        $this -> assign("areas",$areas);

       $id = $_GET['id'];
        $goods = M('goods');
        $data = $goods -> find($id);
        $this -> assign("goods",$data); 
          
        $_POST['img'] = $this -> upload();
        
      if($_POST['sub']){
           
      
         //dump($_POST);exit;
        
          if($goods -> create()){
            if($goods -> save()){
                $this -> redirect('goods/index');
            }else{
                $this  -> error("修改失败！");
            }
          }
        }
       


        $this->display();
    }


    //商品删除
    public function del($id){
        $goods = M("goods");

        if($goods -> delete($id)){
            $this -> redirect("goods/index");
        }else{
            $this -> error("删除失败！");
        }
    }

    

    public function state(){
        $goods = M("goods");
        $id = $_GET['id'];
        $state = $goods -> find($id);
        $where = "id=".$id;
        if($state['is_state']){
            $data['is_state'] = '0';
            $goods -> where($where) -> save($data);
            $this -> redirect("goods/index");
           
        }else{
            $data['is_state']='1';
            $goods->where($where)->save($data);
            $this -> redirect("goods/index");
        }

    }
    public function best(){
        $goods = M("goods");
        $id = $_GET['id'];
        $state = $goods -> find($id);
        $where = "id=".$id;
        if($state['is_best']){
            $data['is_best'] = '0';
            $goods -> where($where) -> save($data);
            $this -> redirect("goods/index");
        }else{
            $data['is_best']='1';
            $goods->where($where)->save($data);
            $this -> redirect("goods/index");
        }
    }
    public function phone(){
        $goods = M("goods");
        $id = $_GET['id'];
        $state = $goods -> find($id);
        $where = "id=".$id;
        if($state['is_phone']){
            $data['is_phone'] = '0';
            $goods -> where($where) -> save($data);
           $this -> redirect("goods/index");
        }else{
            $data['is_phone']='1';
            $goods->where($where)->save($data);
            $this -> redirect("goods/index");
        }
    }

    
}