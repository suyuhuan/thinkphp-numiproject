<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
    public function index(){
        $order = M("order");
        $count = $order -> count();
        $Page = new\Think\Page($count,6);
        $data = $order ->where(user_id .'='. $_SESSION['user']['id']) -> limit($Page -> firstRow.','.$Page -> listRows) -> select();

        $this -> assign("page",$Page-> show());

        $this -> assign("order",$data);
        
        $this->display();
    }
    public function Ordetail(){
        $id = $_GET['id'];
        $order = M("order");
        $data = $order -> find($id);
        $this -> assign("orders",$data);
        $this->display();
    }

      //删除订单
    public function del($id){
        $order = M("order");

        if($order -> delete($id)){
            $this -> redirect("order/index");
        }else{
            $this -> error("删除失败！");
        }
    }

    //得到当前订单号和总价  支付页面
    public function pay(){

        $order = M("order");
        $id = $_GET['id'];
        $data = $order ->field('id,order_num,sumprice')-> find($id);
        //dump($data);exit;
        $this -> assign("order",$data);

        $this -> display();
    }


    //付款 or 取消
    public function payoff(){
        $id = $_POST['id'];
        $paypwd = $_POST['paypwd'];//输入的支付密码

        if($_POST['confirm']){
            if($paypwd == $_SESSION['user']['paypwd']){
                $order = M("order");
                $data['state'] = '2';
                $order -> where(id.'='.$id) -> save($data);
                

                $this -> redirect("order/index");
            }else{
                $this -> error("支付密码错误！");
            }
        }

        if($_POST['cancel']){
            $this -> redirect("order/index");
        }
       
    }

    //查询未使用状态的订单   
   public function status(){
        $order = M("order");
        $count = $order -> count();
        $Page = new\Think\Page($count,6);
        if($_POST['state'] == '0'){
          $data = $order ->where(user_id .'='. $_SESSION['user']['id'])-> limit($Page -> firstRow.','.$Page -> listRows) -> select();
 
        }else{
            $map['state'] =$_POST['state'];
            $map['user_id'] =  $_SESSION['user']['id'];
        $data = $order ->where($map)-> limit($Page -> firstRow.','.$Page -> listRows) -> select();
    }
       // dump($_POST);
        //echo $order -> getlastsql();exit;
        $this -> assign("page",$Page-> show());

        $this -> assign("status",$data);

        $this -> display();
   }

   //查询即将到期的订单
   public function imminent(){

   }
   //查询待付款
   public function obligation(){

   }
   //查询已过期
   public function timeout(){

   }



















    //商品确认页面展示，获取用户信息
     //public function order(){}
     //生产订单，同时消除购物车信息
     public function creOrder(){}
     //获取订单信息、展示评论页面
     public function review(){}
     //生产评论、修改订单状态
     public function addComment(){}
     //确认收货(AJAX)
     public function affirm(){}
}