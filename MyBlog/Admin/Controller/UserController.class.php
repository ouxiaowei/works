<?php
	class UserController extends Controller{
		//商品
		public function add(){
			$this->display('./User/add.html');
		}
		
		public function insert(){
			
			$user=new Modle('users');
			
			unset($_POST['surepass']);
			
			var_dump($_POST);
			if($user->add($_POST)){
				$this->success('添加成功', './index.php?c=user&a=index', 3);
			}else{
				$this->error('添加失败', './index.php?c=user&a=index', 3);
			}
		}
		
		public function index(){
			
			$users=new Modle('users');
			
			//============封装查询===========
			$whereList=[];
			$urlList=[];
			
			if(!empty($_REQUEST['search'])){
				$whereList[]=" nickname like '%".$_REQUEST['search']."%' || phone like '%".$_REQUEST['search']."%'";
				$urlList[]="search=".$_REQUEST['search']."&search=".$_REQUEST['search'];
			}
			if(!empty($_REQUEST['status'])){
				$whereList[]="status=".$_REQUEST['status'];
				$urlList[]="status=".$_REQUEST['status'];
			}
			
			$where='';
			$url='';
			
			//查询到的条数
			if(count($whereList)>0){
				$where = " where ".implode(' && ', $whereList); 
				//var_dump($where);
				$url = "&".implode('&', $urlList); 
				//var_dump($url);
				
			}
			//============封装查询===========
			
			//==============封装分页====================
			$pageSize=2;
			
			//判断是否得到p进行页码加减
			$page=$_GET['p'] ?? 1;
			
			//判断是否有查询条数
			if(count($whereList)>0){
				$maxRows=count($whereList);
			}else{
				$maxRows=$users->query("select count(*) as num from users")[0]['num'];
			}
			
			$maxPage=ceil($maxRows / $pageSize);
			//var_dump($maxRows);
			if($page>$maxPage){
				$page=$maxPage;
			}
			if($page<1){
				$page=1;
			}
			$limit="";
			
			$limit=" limit ".($page-1)*$pageSize.",".$pageSize." ";
			//var_dump($limit);
			//==============封装分页====================
			
			//分别进行判断分页
			if(!empty($_REQUEST['search'])){
				$data=$users->query("select * from users".$where);
				if($data==false){
					$this->error("未查找到", 'index.php?c=user&a=index', 2);
					die;
				}
			}else{
				$data=$users->query("select * from users".$limit);
			}
			//$data=$users->select();
			
			$status = [1=>'开启',2=>'锁定'];
			
			$this->assign('url',$url);
			$this->assign('page',$page);
			$this->assign('maxPage',$maxPage);
			$this->assign('data',$data);
			$this->assign('status',$status);
			
			$this->display('./User/index.html');
			
		}
		
		public function delete(){
			$id=$_GET['id'];
			//var_dump($id);
			$users=new Modle('users');
			
			$data=$users->delete($id);
			if($data){
				$this->success('删除成功', './index.php?c=user&a=index', 3);
			}else{
				$this->error('删除失败', './index.php?c=user&a=index', 3);
			}
		}
		
		//初始化修改信息
		public function edit(){
			$id=$_GET['id'];
			$user=new Modle('users');
			
			$data=$user->find($id);
			$data=$data[0];
			
			$this->assign('data',$data);
			$this->assign('id',$id);
			
			$this->display('./User/edit.html');
		}
		
		//执行修改信息
		public function update(){
			$id=$_GET['id'];
			
			unset($_POST['surepass']);
			$data=$_POST;
			
			$user=new Modle('users');
			
			$res=$user->save($data,$id);
			
			if($res){
				$this->success('修改成功', './index.php?c=user&a=index', 3);
			}else{
				$this->error('修改失败', './index.php?c=user&a=index', 3);
			}
			
		}
		
	}
	
?>