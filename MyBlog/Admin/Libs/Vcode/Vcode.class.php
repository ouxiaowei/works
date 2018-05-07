<?php
//session_start();
//验证码类
class Vcode {
	
	//成员属性
	private $charset = 'abcdefghkmnprstuvwxyzABCDEFGHKMNPRSTUVWXYZ23456789';//随机因子
	private $code;//验证码
	private $codelen = 4;//验证码长度
	private $width = 100;//宽度
	private $height = 40;//高度
	private $img;//图形资源句柄
	private $font;//指定的字体
	private $fontsize = 20;//指定字体大小
	private $fontcolor;//指定字体颜色
	
	//构造方法初始化
	public function __construct() {
		//$this->font = '../public/font/elephant.ttf';//注意字体路径要写对，否则显示不了图片
		$this->font = 'D:\xampp\htdocs\month05\week02\3.9\MyBlog\Admin\Public\font\Elephant.ttf';
		
//		$basedir=dirname(__FILE__);
//		$this->font=$basedir.'Elephant.ttf';
		
				
	}
	
	//生成随机码
	private function createCode() {
		$_len = strlen($this->charset)-1;
		for ($i=0;$i<$this->codelen;$i++) {
			$this->code .= $this->charset[mt_rand(0,$_len)];
		}
	}
	
	//生成背景
	private function createBg() {
		$this->img = imagecreatetruecolor($this->width, $this->height);
		$color = imagecolorallocate($this->img, mt_rand(157,255), mt_rand(157,255), mt_rand(157,255));
		imagefilledrectangle($this->img,0,$this->height,$this->width,0,$color);
	}
	
	//生成文字
	private function createFont() {
		$_x = $this->width / $this->codelen;
		for ($i=0;$i<$this->codelen;$i++) {
			$this->fontcolor = imagecolorallocate($this->img,mt_rand(0,156),mt_rand(0,156),mt_rand(0,156));
			imagettftext($this->img,$this->fontsize,mt_rand(-30,30),$_x*$i+mt_rand(1,5),$this->height / 1.4,$this->fontcolor,$this->font,$this->code[$i]);
		}
	}
	
	//生成线条、雪花
	private function createLine() {
		//线条
		for ($i=0;$i<6;$i++) {
			$color = imagecolorallocate($this->img,mt_rand(0,156),mt_rand(0,156),mt_rand(0,156));
			imageline($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$color);
		}
		
		//雪花
		for ($i=0;$i<100;$i++) {
			$color = imagecolorallocate($this->img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
			imagestring($this->img,mt_rand(1,5),mt_rand(0,$this->width),mt_rand(0,$this->height),'*',$color);
		}
	}
	
	//输出
	private function outPut() {
		ob_clean();
		header('Content-Type:image/png');
		imagepng($this->img);
		imagedestroy($this->img);
	}
	
	//生成验证码图片
	public function doimg() {
		$this->createBg();
		$this->createCode();
		$this->createLine();
		$this->createFont();
		$this->outPut();
	}
	
	//获取验证码内容
	public function getCode() {
		return strtolower($this->code);
	}
}

?>