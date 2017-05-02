<?php
namespace Admin\Controller;
//use Think\Controller;

/**
 * 分类管理控制器
 */
class CategoryController extends InitController
{
   
    public function index()
    {
        $cate = M('goods_category');
        $count = $cate -> count();
        $Page = new\Think\Page($count,10);

        $allCate = $cate ->field("id,name,pid,concat(path,',',id) abspath") ->order("abspath")-> limit($Page->firstRow.",".$Page->listRows) -> select();
        $catePage = $Page -> show();
        $this -> assign("page",$catePage);
         //dump($allCate);
        $this->assign('cateTree', $allCate);

      
        $this->display();
    }
    
    public function add(){

        $cate = M('goods_category');
        if($_POST['sub']){
            if($_POST['pid'] != 0){

            $parentPath = $cate -> field('path') -> find($_POST['pid']);
            $_POST['path'] = $parentPath['path'].','.$_POST['pid'];

        }else{

            $parentPath = '0';
        }
           
           
               

             if($_POST['name'] == ''){
                $this -> error("分类名不能为空！");
                $this -> redirect("Category/add");
                exit;
             }
            //dump($_POST['path']);exit;
           if($cate -> create()){
            if($cate -> add()){
                $this -> redirect("Category/index");
            }else{
                $this -> error("添加失败~");
            }
           }else{
            $this -> error("添加失败");
           }
            
        }
        $cates = $cate -> field("id,name,pid,concat(path,',',id) abspath") -> order('abspath') ->select();
        $this -> assign("cates",$cates);
        $this -> display();
    }


    public function del($id){
        $cate = M('goods_category');

        //如果有子分类不能进行删除
        $map['pid'] = $id;
        $parent = $cate -> where($map) -> count();//count计算数组中的单元数目或对象中的属性个数
        if($parent){
            $this -> error("请先删除子类！");
            exit;
        }

        //没有子分类情况下的删除
        if($cate->delete($id))
        {
            $this->redirect("Category/index");
        }else{
            $this->error("删除失败!");
        }
    }

    public function edit(){
        $cate = M('goods_category');


       if($_POST['sub']){
        
            $parent = $cate -> field('path') -> find($_POST['pid']);
            $parentPath = $parent['path'];
            
           //不能把分类修到它的子分类中
            if(in_array($_POST['id'],explode(",",$parentPath))){
                $this -> error("不能把分类修改到它的子分类中");
                exit;
            }

            $nowCate = $parentPath.','.$_POST['pid'].','.$_POST['id'];
            


            //替换path
            $cate -> query("UPDATE nm_goods_category set path = replace(path,'{$newCatePath}','{$pabsPath}')");
            $data = $_POST;
            //修改操作的分类
            $data['path'] = $parentPath.','.$_POST['pid'];
            if($cate -> create($data)){
                if($cate -> save()){
                    $this -> redirect("Category/index");
                }else{
                    $this -> error("修改失败");
                }
            }
            exit;
       }

         
        $id = $_GET['id'];
        //查询所有分类的数据
        $cates = $cate -> field("id,name,pid,concat(path,',',id) abspath") -> order('abspath') ->select();
        $this -> assign("cates",$cates);

        //得到当前需要编辑的数据
        $category = $cate -> find($id);
        $this -> assign("category",$category);
        $this->display();

    }
}