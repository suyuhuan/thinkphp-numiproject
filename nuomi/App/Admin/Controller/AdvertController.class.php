<?php
namespace Admin\Controller;
//use Think\Controller;

class AdvertController extends InitController 
{

	 //展示广告列表
    public function index()
    {
        $ads=M("advert");
        if($_GET['position'])
        {
            $map['title'] =array("LIKE","%{$_GET['position']}%");
        }
        unset($map['p']);
        $count = $ads->where($map)->count();
        $Page=new \Think\Page($count,5);
        $data=$ads->where($map)->limit($Page->firstRow.','.$Page->listRows)->order("id ASC")->select();
        $this->assign("page",$Page->show());
        $this->assign('ads',$data);
    	$this->display();
    }
    //获取添加广告栏页面、添加广告
    public function add()
    {
        $id=I("id");
        $adv=M("advert");
        $data = $adv->find($id);
        $data['id']=$id;
        $this->assign("adv",$data);
        $this->display();
    }
    //添加
    public function insert()
    {
        $adv=M("advert");
        $data = $_POST;
        if($data){
            $info = $this->uppic();
            $data['image']=$info['savepath'].$info['savename'];
            $data['ctime']=time();
            if($adv->create($data)){
                if($adv->add()){
                    $this->redirect("Advert/index");
                }else{
                    $this->error("添加失败!");
                }
            }else{
                $this->error("添加失败!");
            }
        }
        $this->display();
    }
    //处理上传图片
    public function uppic()
    {
        $config = array("maxSize"=>'100000000000',
                        "exts"=>array('jpeg','jpg','png','gif'),
                        "rootPath"=>'Public/',
                        "savePath"=>'Uploads/advert/',
            );
        $upload = new\Think\Upload($config);
        return $upload -> uploadOne($_FILES['image']);
    }
    //获取修改广告栏页面、修改广告
    public function mod()
    {
        $adv = M("advert");
        if($_POST['sub'])
        {
            $id=$_POST['id'];
            if($adv->create()){
                $info = $this->uppic();
                if($info)
                {
                    $data=$adv->find($id);
                    $img ="/Public/".$data['image'];
                    if(file_exists($img)){
                        unlink($img);
                    }
                    $data['image']=$info['savepath'].$info['savename'];
                    $info_data['id']=$id;
                    $info_data['place']=I('place');
                    $info_data['title']=I('title');
                    $info_data['image']=$data['image'];
                    $info_data['ctime']=time();
                    $info_data['url']=$data['url'];
                }
                if($adv->save($info_data))
                {
                    $this->redirect("Advert/index");
                }else{
                    $this->error("修改失败");
                }
            }else{
                $this->error("修改失败");
            }
        }else{
            $data = $adv->find($_GET['id']);
            $this->assign('data',$data);
        }
        $this->display();
    }
    //删除广告
    public function del()
    {
        $adv=M("advert");
        $id = I("id");
        $data = $adv->find($id);
        if($adv->where('id='.$id)->delete()){
            $data=$adv->find($id);
            $img="./Public/Uploads/advert/".$data['image'];
            if(file_exists($img)){
                unlink($img);
            }
            $this->success("删除成功!");
        }else{
            $this->error("删除失败!");
        }
    }
    
   
}