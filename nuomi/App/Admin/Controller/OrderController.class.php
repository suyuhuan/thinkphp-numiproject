<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller 
{
    //获取首页
    public function index(){
        $order = M("order");
        $count = $order -> count();
        $Page = new\Think\Page($count,6);

        $data = $order ->limit($Page -> firstRow.','.$Page -> listRows) -> select();

        foreach($data as $k => $v){          
           $user = M("user");
           $u= $user -> field('username') -> where(id.'='.$v['user_id']) -> find();
           $data[$k]['username'] = $u['username'];
        }
         

        $orderPage = $Page -> show();
        $this -> assign("page",$orderPage);

        $this -> assign("order",$data);
        
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

    //修改订单状态
    public function mod(){
        $order = M("order");
        $id = $_GET['id'];
        $mod = $order -> find($id);
        //dump($mod);exit;
        if($mod['state'] == '2'){
            $state['state'] = '4';
            $order -> where(id.'='.$id) -> save($state);
             $this -> redirect("order/index");
        }

    }
    
    
    
    
}