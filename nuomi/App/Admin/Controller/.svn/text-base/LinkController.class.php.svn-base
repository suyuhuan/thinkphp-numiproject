<?php
namespace Admin\Controller;
//use Think\Controller;
class LinkController extends InitController 
{
	//获取友情链接首页
    public function index()
    {
    	$link = M("links");
    	if($_GET['title']){
    		$map['title']=array("LIKE","%{$_GET['title']}%");
    	}
    	$count = $link->where($map)-> count();
    	$Page = new\Think\Page($count,6);
    	$data=$link->where($map)->field('id,title,url,type,detail')->limit($Page-> firstRow.','.$Page-> listRows)->select();
    	$this->assign("data",$data);
		$Page= $Page->show();
		$this ->assign('page',$Page);
    	$this->display();
    }
    //添加链接
    public function add(){
		
    	$link = M("links");
		if($_POST['sub']){
			if($link->create()){
				if($link->add()){
					$this->redirect("Link/add");
				}else{
					$this->error("添加失败");
				}
			}else{
				$this -> error("添加失败");
			}
			
		}
    	$this->display();
    }
    //修改链接
    public function mod()
    {
            $link=M("links");
			$id=$_GET["id"];
			$links=$link -> find($id);
			$this->assign("links",$links);
			$map['id'] = $id;
            if($_POST['sub']){
				if($link -> create()){
					if($link ->save()){
						$this -> redirect("Link/index");
					}else{
						$this -> error("修改sss失败");
					}
				}else{
					$this ->error("修改失败");
				}
			}
            $this->display();
        }

	//删除友情链接
    public function del(){
        $link = M("links");
        $id =$_GET['id'];
        if($link -> delete($id)){
            $this -> redirect("Link/index");
        }else{
            $this -> error("删除失败!");
        }
    }
	
	
}