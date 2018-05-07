<?php
	
class Modle{
	public $tableName;//表
	public $link;
	public $pk;
	public $field;
	public $where;
	public $limit;
	public $order;
	
	public function __construct($tbl_name){
		$this->tableName=$tbl_name;
		$this->link=mysqli_connect(HOST, USER, PASSWORD) or die('数据库链接错误');
		mysqli_set_charset($this->link, CHARSET);
		mysqli_select_db($this->link, DB_NAME);
		$this->getField();
		
	}
	//获取表单字段
	public function getField(){
		$res=mysqli_query($this->link, "desc {$this->tableName}");
		if($res!=false && mysqli_num_rows($res)>0){
			while($rows=mysqli_fetch_assoc($res)){
				if($rows["Key"]=="PRI"){
					$this->pk=$rows["Field"];
					//var_dump($this->pk);
				}
				
//				$arr[]=$rows;
//				var_dump($arr);
			}
			
		}
		
		
	}
	
	
	
	
	//增
	public function erro_report(){
		echo '<script>alert("'.mysqli_error($this->link).'")</script>';
	}
	
	public function add($data){
		$k=array_keys($data);
		$k=implode(',', $k);
		
		$v=array_values($data);
		$v="'".implode("','", $v)."'";
		
		$query="insert into {$this->tableName} ({$k}) values({$v})";
		
		//var_dump($query);
		
		$res=mysqli_query($this->link, $query);
		if($res && mysqli_affected_rows($this->link)>0){
			return mysqli_insert_id($this->link);
		}else{
			return $this->erro_report();
			return false;
		}
		//var_dump($query);
		
	}
	//删
	public function delete($id){
		$res=mysqli_query($this->link, "delete from {$this->tableName} where {$this->pk}={$id}");
		//var_dump("delete from {$this->tableName} where id={$id}");
		if($res && mysqli_affected_rows($this->link)>0){
			return true;
		}else if(mysqli_affected_rows($this->link)==0){
			echo '<script>alert("删除有误，请检查条目")</script>';
			return false;
		}else{
			return $this->erro_report();
			return false;
		}
		
		
	}
	
	//改 id=user_id
	
	public function save($data,$id){
		$set="";
		foreach($data as $k=>$v){
			$set.=$k."='".$v."',";
		}
		
		$set=rtrim($set,",");
		//var_dump($set);
		$query="update {$this->tableName} set {$set} where id={$id}";
		//var_dump($query);
		$res=mysqli_query($this->link, $query);
		if($res && mysqli_affected_rows($this->link)>0){
			return true;
		}else if(mysqli_affected_rows($this->link)==0){
			echo '<script>alert("修改有误，请检查条目")</script>';
			return false;
		}else{
			return $this->erro_report();
			return false;
		}
		
	}
	//查
	public function select(){
		$f="";
		if(!empty($this->field)){
			$f=$this->field;
		}else{
			$f="*";
		}
		
		$w="";
		if(!empty($this->where)){
			$w="where ".$this->where;
			//var_dump($w);
		}
		
		$o="";
		if(!empty($this->order)){
			$o="order by ".$this->order;
			//var_dump($o);
		}
		$m="";
		if(!empty($this->limit)){
			$m="limit ".$this->limit;
			//var_dump($m);
		}
		$query="select {$f} from {$this->tableName} {$w} {$o} {$m}";
		$res=mysqli_query($this->link, $query);
		if($res!=false && mysqli_num_rows($res)>0){
			while($rows=mysqli_fetch_assoc($res)){
				$arr[]=$rows;
				
			}
			$this->field=null;
			$this->where=null;
			$this->limit=null;
			$this->order=null;
			return $arr;
		}else{
			return false;
		}
		//var_dump($arr);
	}
	
	//选择字段
	public function field($data){
		$this->field=$data;
		return $this;
	}
	
	//where条件
	public function where($where){
		$this->where=$where;
		return $this;
	}
	
	//排序
	public function order($order){
		$this->order=$order;
		return $this;
	}
	
	
	//limit
	public function limit($limit){
		$this->limit=$limit;
		return $this;
	}
		
	
	
	//单条查询   id=user_id hobby转换需加[0]
	
	 
	public function find($id){
		$res=mysqli_query($this->link, "select * from {$this->tableName} where id={$id}");
		if($res!=false && mysqli_num_rows($res)>0){
			while($rows=mysqli_fetch_assoc($res)){
				$arr[]=$rows;
			}
			return $arr;
		}else{
			return false;
		}
	}
	//统计条目数
	public function count(){
		$res=mysqli_query($this->link, "select * from {$this->tableName}");
		if($res!=false){
			return mysqli_num_rows($res);
		}
		
	}
	//原生sql语句
	public function query($sql){
		
		$new=explode(" ", $sql)[0];
//		var_dump($sql);
		switch ($new){
			case "insert":
				mysqli_query($this->link, $sql);
				
			break;
			case "delete":
				mysqli_query($this->link, $sql);
				
			break;
			case "update":
				mysqli_query($this->link, $sql);
				
			break;
			case "select":
				$res=mysqli_query($this->link, $sql);
				if($res!=false && mysqli_num_rows($res)>0){
					while($rows=mysqli_fetch_assoc($res)){
						$arr[]=$rows;
						
					}
					
					return $arr;
				}else{
					return false;
				}
				var_dump($arr);
			break;	
		}
		
	}
	
}

	//增加条目	
//	$stu=new Modle('students');
//	$data=[
//		"name"=>"王小5",
//		"sex"=>"w",
//		"birthday"=>"1599-02-03",
//	];
//	$rs=$stu->add($data);
//	var_dump($rs);
	
	//删除条目
//	$rs=$stu->delete(17);
	
	//修改条目
//	$data=[
//		"name"=>"小王6",
//		"sex"=>"m",
//	];
//	
//	
//	$rs=$stu->save($data,11);
	//查找
//	$rs=$stu->field('name,sex')->where("id<10")->limit("3,2")->order("name")->select();
//	$re=$stu->select();
//	var_dump($re);
//	var_dump($rs);
	//统计条数
//	$num=$stu->count();
//	var_dump($num);
//	$re=$stu->find("10");
//	var_dump($re);
	//原生
//	$re=$stu->query("select * from students");
//	var_dump($re);
?>