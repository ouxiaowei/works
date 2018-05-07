<?php
	class ArticleController extends Controller{
		//商品
		public function add(){
			$this->display('./Article/add.html');
		}
		
		public function insert(){
			if( empty($_POST['title']) || empty($_POST['author']) || empty($_POST['intro']) || empty($_POST['details']) || empty($_POST['keywords'])){
				$this->error("提交数据不能为空", $_SERVER["HTTP_REFERER"], 2);
				die;
			};
			
//			var_dump($_FILES);
			if(empty($_FILES['picture'])){
				$this->error("提交图片不能为空", $_SERVER["HTTP_REFERER"], 2);
				die;
			}
			$up=new Fileupload();
			$up->set("path", "../Public/Admin/Uploads");
			$up->set("allowtype", array('jpg','gif','png','jpeg'));
			$up->set("maxsize", 1000000);
			$up->set("israndom", true);
			$res=$up->upload('picture');
			if($res!=true){
				$this->error($up->getErrorMsg(),$_SERVER["HTTP_REFERER"], 2);
				die;
				//var_dump($res);
			}
			
//			var_dump($res);
			
			$path="../Public/Admin/Uploads";
			$im=new Image($path);
			$filename=$up->getFileName();
			
			$res1=$im->thumb($filename, 165, 125,'s_');
			
			if($res1==false){
				$this->error("图像缩放失败", $_SERVER["HTTP_REFERER"], 2);
				die;
			};
			$_POST['picture']=$filename;
			
			
			$article=new Modle('article');
			
			$time=date('Y-m-d H:i:s',time());
			
			$_POST['insert_at']=$time;
//			var_dump($_POST);
			if($article->add($_POST)){
				$this->success('添加成功', './index.php?c=article&a=index', 3);
			}else{
				$this->error('添加失败', './index.php?c=article&a=index', 3);
			}
//			var_dump($time);

		}
		
		public function index(){
			$article=new Modle('article');
			//=====查询=========
			$whereList=[];
			$urlList=[];
			if(!empty($_REQUEST['search'])){
				$whereList[]=" author like '%".$_REQUEST['search']."%' || title like '%".$_REQUEST['search']."%'";
				$urlList[]="search=".$_REQUEST['search']."&search=".$_REQUEST['search'];
			}
//			var_dump($whereList);
//			var_dump($urlList);
			
			$where='';
			$url='';
			if(count($whereList)>0){
				$where=" where ".implode(' && ', $whereList);
				$url="&".implode('&', $urlList);
//				var_dump($where);
//				var_dump($url);
				
			}
			//=====查询=========
			
			//=====分页=========
			$pageSize=2;
			$page=$_GET['p'] ?? 1;
			
			//判断是否有查询条数
			if(count($whereList)>0){
				$maxRows=count($whereList);
			}else{
				$maxRows=$article->query("select count(*) as num from article")[0]['num'];
			}
			$maxPage=ceil($maxRows / $pageSize);
			
			if($page>$maxPage){
				$page=$maxPage;
			}
			if($page<1){
				$page=1;
			}
			$limit="";
			$limit=" limit ".($page-1)*$pageSize.",".$pageSize." ";
			if(!empty($_REQUEST['search'])){
				$data=$article->query("select * from article order by insert_at desc".$where);
				if($data==false){
					$this->error("未查找到", 'index.php?c=article&a=index', 2);
					die;
				}
			}else{
				$data=$article->query("select * from article order by insert_at desc".$limit);
			}
			

			//=====分页=========
			
			$this->assign('url',$url);
			$this->assign('data',$data);
			$this->assign('page',$page);
			$this->assign('maxPage',$maxPage);
			
			$this->display('./Article/index.html');
		}
		
		public function delete(){
			$id=$_GET['id'];
			//var_dump($id);
			$article=new Modle('article');
			
			$data=$article->delete($id);
			if($data){
				$this->success('删除成功', './index.php?c=article&a=index', 3);
			}else{
				$this->error('删除失败', './index.php?c=article&a=index', 3);
			}
		}
		
		//初始化修改信息
		public function edit(){
			$id=$_GET['id'];
			$article=new Modle('article');
			
			$data=$article->find($id);
			$data=$data[0];
			
			//var_dump($data);
			$this->assign('data',$data);
			$this->assign('id',$id);
			
			$this->display('./Article/edit.html');
		}
		
		//执行修改信息
		public function update(){
			$id=$_GET['id'];
			
			if( empty($_POST['title']) || empty($_POST['author']) || empty($_POST['intro']) || empty($_POST['details']) || empty($_POST['keywords'])){
				$this->error("提交数据不能为空", $_SERVER["HTTP_REFERER"], 2);
				die;
			};
			
//			var_dump($_FILES);
			if(empty($_FILES['picture'])){
				$this->error("提交图片不能为空", $_SERVER["HTTP_REFERER"], 2);
				die;
			}
			$up=new Fileupload();
			$up->set("path", "../Public/Admin/Uploads");
			$up->set("allowtype", array('jpg','gif','png','jpeg'));
			$up->set("maxsize", 1000000);
			$up->set("israndom", true);
			$res=$up->upload('picture');
			if($res!=true){
				$this->error($up->getErrorMsg(),$_SERVER["HTTP_REFERER"], 2);
				die;
				//var_dump($res);
			}
//			var_dump($res);
			
			$path="../Public/Admin/Uploads";
			$im=new Image($path);
			$filename=$up->getFileName();
			
			$res1=$im->thumb($filename, 165, 125,'s_');
			
			if($res1==false){
				$this->error("图像缩放失败", $_SERVER["HTTP_REFERER"], 2);
				die;
			};
			$_POST['picture']=$filename;
			
			$article=new Modle('article');
			
			$time=date('Y-m-d H:i:s',time());
			
			$_POST['insert_at']=$time;
//			var_dump($_POST);
			if($article->save($_POST,$id)){
				$this->success('添加成功', './index.php?c=article&a=index', 3);
			}else{
				//$this->error('添加失败', './index.php?c=article&a=index', 3);
			}
			
		}
		
	}
	
?>