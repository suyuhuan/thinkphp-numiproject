<?php
namespace Home\Controller;
use Think\Controller;
class DetailsController extends Controller {


       
	//订单信息展示
	public function index(){

                if(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"])=="xmlhttprequest"){ 
                        $Data = $this -> getComment();
                        
                        $info = $Data['userData'];
                        $page = $Data['Page'];

                        $this -> assign('page',$page);
                        $this -> assign("info",$info);
                        $this -> assign('goodsId',$id);

                        $this -> display('ajaxPage');

                }else{ 
                         // 正常请求的处理方式 
                        $id = $_GET['id'];
                        $good = M("goods");
                        $data = $good ->find($id); 
                        $cate_id = $data['cate_id'];//得到分类ID
                        $this -> assign("good",$data);
                        $mlmgood = $good->limit('4')->order("rand()")->select();
                        $klkgood = $good->limit('5')->order("rand()")->select();
                        $this->assign("mlmgood",$mlmgood);
                        $this->assign("klkgood",$klkgood);

                        $cate = M("goods_category");
                        $cates = $cate ->find($cate_id);
                        $pid = $cates['pid'];
                        $this -> assign("cate",$cates);
                        $pid = $cate ->find($pid);
                        $this -> assign("pid",$pid);  

                        $Data = $this-> getComment();

                        $info = $Data['userData'];
                        $page = $Data['Page'];

                        $this -> assign('page',$page);
                        $this -> assign("info",$info);
                        $this -> assign('goodsId',$id);
                        
                        $this->display(); 
                }

	}

        
        //评论显示
        public function getComment(){
        $comment = M("comment");
        $user = M('user');

        $map['goodid']=$_GET['id'];

        $count = $comment->where($map)-> count();

       

        $comdata = $comment->where("goodid={$_GET['id']}")->select();
       
        
        foreach($comdata as $k => $v){
                $userid[] = $v['userid'];
        }

        $userID = array_unique($userid);
        $str = implode(',',$userID);

        $umap['id'] = array('in',$str);
        $count = $user -> where($umap) -> count();
        $Page = new\Think\Page($count,2);

        $userData = $user -> where($umap) -> limit($Page->firstRow.','.$Page->listRows) -> select();


        foreach($userData as $key => $value){
                //$userInfo[$key] = $user -> where("id = {$value}") -> find();
                $goods = $comment -> where("userid = {$value['id']}")->order("comtime desc")->select();
                $userData[$key]['comt'] = $goods;
        }
        $show = $Page->show();
        $Data['userData'] = $userData;
        $Data['Page'] = $show;
        return $Data;
        }

        //public function ajaxPage(){

                // $str .= "<div class='valuation-content'><ul>";
                // foreach($info as $vol){
    
                // $str.="<div class='photo'>
                //                 <img src='/nuomi/Public/Uploads/user/".$vol['image']."?id/".rand()."'/>
                //                 <span>".$vol['username']."</span>
                //         </div>";
                // $str2 ='';     
                // foreach($vol['comt'] as $vos){
                //          $str2 .= "<div class='time'>";
                //         if($vos['stute'] == 1){
                //                 $str2 .= "追评：";
                //         }
                //         $str2 .= date('Y-m-d H:i:s',$vos['comtime']);
                //         $str2 .= "说：";
                //         $str2 .= "<div class='publish-star'>
                //                         <div id='pub-star' class='pub-star'>";
                //                         if ($vos['goodpoint'] == 1){
                //                                $str2 .= "<div style='width:14px' class='light-star'></div>";
                //                         }else if($vos['goodpoint'] == 2){
                //                                 $str2 .= "<div style='width:28px' class='light-star'></div>"; 
                //                         }else if($vos['goodpoint'] == 3){
                //                                $str2 .= "<div style='width:42px' class='light-star'></div>";
                //                         }else if($vos['goodpoint'] == 4){
                //                                $str2 .= "<div style='width:56px' class='light-star'></div>"; 
                //                         }else if($vos['goodpoint'] == 5){
                //                                 $str2 .= "<div style='width:70px' class='light-star'></div>";
                //                         }
                //                $str2 .= '</div></div></div>';
                //                 $str2 .= "<li>".$vos['content']."</li>";
                // }
                // $str .= $str2;
                // }
                // $str .= "</ul></div>";
                // $str .= "<div class='uipage' style='height:25px;margin-top:5px;text-align:right'>".$page."</div>";
                // return $str;
}       //}