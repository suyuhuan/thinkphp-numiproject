<?php
    namespace Admin\Controller;
    //use Think\Controller;
    class ConfigController extends InitController{
		//网站优化
        public function index(){
			$config=M("config");
			$configs=$config -> find();
			//dump($configs);
			$this ->assign("config",$configs);
			$this -> display();
		}
		
		
		
		//配置信息
        public function information(){
		
			if($_POST['sub']){
				$config=M("config");
				//dump($_POST);
				//实例化上传类
				//dump($_FILES);
				$upload = new \Think\Upload();
				$upload -> maxSize = 3145728;// 设置附件上传大小   
				$upload -> exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
				$upload-> rootPath = "./Public/";//上传路径
				$upload -> savePath = 'Upload/'; // 设置附件上传目录
				$info = $upload -> uploadOne($_FILES['logo']); 
				$_POST['logo']=$info['savepath'].$info['savename'];
				if(!$info) {
				// 上传错误提示错误信息       
					$this->error($upload->getError());    
				}else{
					// 上传成功 获取上传文件信息     
					//echo $info['savepath'].$info['savename'];   
					$this ->success("上传成功");
				}
				if($config ->create()){
					if($config -> add()){
						
					}
				}
			}
		
			$this -> display();
        }
	
            
    }