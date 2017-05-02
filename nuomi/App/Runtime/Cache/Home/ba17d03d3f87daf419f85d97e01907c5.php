<?php if (!defined('THINK_PATH')) exit();?>
<html>
     <head>
         <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>index</title>
    <style>
            /*main*/
        *{padding:0;margin:0;}
        #main{height:517px;width:1280px;background:#EFF0F1;padding-top:100px;}

        #main .box{width:800px;height:100px;margin:0 auto;background:#67676C;}
                .box strong{color:white;font-size:20px;}

         #main .zhifu{width:800px;height:200px;margin:0 auto;background:white;padding-top:50px;}
        .zhifu .table{width:600px;height:100px;margin:0 auto;}
        .pwd{width:180px;height:30px}
        .submit{width:50px;height:25px;border:1px solid #67676C;background:#67676C;color:#fff;margin-top:20px;margin-left:50px}
    </style>
    </head>
    <body>   

     <div id="main">
     <div class="box"><strong>订单号:<?php echo ($order["order_num"]); ?><br/><br/>实付款:<?php echo ($order["sumprice"]); ?>元</strong></div>        
     <div class="zhifu">
        <div class="table">
        <table width="420">
            <form action="/nuomi/index.php/Getorder/payoff" method="POST">
                <tr align="center">
                     <td>支付密码:<input type="password" name="paypwd" class="pwd"></td>
                </tr>  
                <tr align="center">
                    <input type="hidden" value="<?php echo ($order["id"]); ?>" name="id">
                    <td>
                        <input type="submit" value="取消" class="submit" name="cancel" onclick = "return confirm('你确定要取消吗？')" >
                        <input type="submit" value="确定" class="submit" name='confirm'>
                    </td>
                </tr>                 
            </form>
        </table>
        </div>
    </div>
     </div>

    </body>
</html>