<?php
namespace Home\Controller;
use Think\Controller;
class GetorderController extends Controller {

	//订单信息展示
	public function index(){
		
		$this->display();
	}

	//将订单信息 插入数据库
	public function getorder(){

		$_POST['user_id'] = $_SESSION['user']['id'];
		$_POST['order_num'] = substr(time(),2,8).rand(0,99999999);//生成随机订单号
		$_POST['order_time'] = date("Y-m-d H:i:s");
		$_POST['sumprice'] = $_POST['price'] * $_POST['number'];

		$order = M("order");
		if($order -> create()){
			$id = $order -> add();
			if($id){
				
			    $data = $order -> field("id,order_num,sumprice") -> find($id);
			    $this -> assign("order",$data);
				
			}else{
				$this -> error("订单提交失败！");
			}
		}
		$this -> display();
	}


	  //付款 or 取消
    public function payoff(){
    	dump($_POST);
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



}