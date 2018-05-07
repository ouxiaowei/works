<?php
	class HeartController extends Controller{
		//商品
		public function add(){
			$this->display('./Heart/add.html');
		}
		
		public function insert(){
			$heart=new Modle('feel');
			
			$time=date('Y-m-d H:i:s',time());
			
			$_POST['insert_at']=$time;
			
			//var_dump($_POST);
			if($heart->add($_POST)){
				$this->success('添加成功', './index.php?c=heart&a=index', 3);
			}else{
				$this->error('添加失败', './index.php?c=heart&a=index', 3);
			}
		}
		
		public function index(){
			$heart=new Modle('feel');
			//=====查询=========
			$whereList=[];
			$urlList=[];
			if(!empty($_REQUEST['search'])){
				$whereList[]=" title like '%".$_REQUEST['search']."%'";
				$urlList[]="search=".$_REQUEST['search'];
			}
//			var_dump($whereList);
//			var_dump($urlList);
			
			$where='';
			$url='';
			if(count($whereList)>0){
				$where=" where ".implode(' && ', $whereList);
				$url="&".implode('&', $urlList);
			}
//			var_dump($where);
//			var_dump($url);
			//=====查询=========
			
			//=====分页=========
			$pageSize=2;
			$page=$_GET['p'] ?? 1;
			
			//判断是否有查询条数
			if(count($whereList)>0){
				$maxRows=count($whereList);
			}else{
				$maxRows=$heart->query("select count(*) as num from feel")[0]['num'];
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
				$data=$heart->query("select * from feel".$where);
				if($data==false){
					//$this->error("未查找到", 'index.php?c=heart&a=index', 2);
					die;
				}
			}else{
				$data=$heart->query("select * from feel".$limit);
			}
//			var_dump($data);

			//=====分页=========
			
			$this->assign('url',$url);
			$this->assign('data',$data);
			$this->assign('page',$page);
			$this->assign('maxPage',$maxPage);
			$this->display('./Heart/index.html');
			
		}
		
		public function delete(){
			$id=$_GET['id'];
			//var_dump($id);
			$heart=new Modle('feel');
			
			$data=$heart->delete($id);
			if($data){
				$this->success('删除成功', './index.php?c=heart&a=index', 3);
			}else{
				$this->error('删除失败', './index.php?c=heart&a=index', 3);
			}
		}
		
		//初始化修改信息
		public function edit(){
			$id=$_GET['id'];
			$heart=new Modle('feel');
			
			$data=$heart->find($id);
			$data=$data[0];
			
			//var_dump($data);
			$this->assign('data',$data);
			$this->assign('id',$id);
			
			$this->display('./Heart/edit.html');
		}
		
		//执行修改信息
		public function update(){
			$id=$_GET['id'];
			
			$time=date('Y-m-d H:i:s',time());
			
			$_POST['insert_at']=$time;
			
			$data=$_POST;
			
			$heart=new Modle('feel');
			
			$res=$heart->save($data,$id);
			
			if($res){
				$this->success('修改成功', './index.php?c=heart&a=index', 3);
			}else{
				$this->error('修改失败', './index.php?c=heart&a=index', 3);
			}
			
		}
		
		public function select(){
			echo "";
		}
	}
	
?>