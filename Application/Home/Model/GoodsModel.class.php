<?php 
namespace Home\Model;
use Think\Model;
use Think\Crypt\Driver\Think;
class GoodsModel extends Model{ 
	protected $dbName = 'shop';
	public function goods($data){
		$sql = sprintf("INSERT INTO `goods`(`title`,`class`,`list`,`name`,`new`,`price`,`sum`,`newprice`,`sendprice`,`phonenumber`,`truename`,`images`,`area`,`describe`,`username`,`time`) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$data['title'],$data['all'],$data['classlist'],$data['name'],$data['new'],$data['price'],$data['sum'],$data['newprice'],$data['sendprice'],$data['phonenumber'],$data['truename'],$data['images'],$data['area'],$data['describe'],session('username'),date("Y-m-d H:i:s"));
		return mysql_query($sql);
	}
	public function want_post($data){
		$sql = sprintf("INSERT INTO `want`(`title`, `class`, `price1`, `price2`, `phonenumber`, `truename`, `area`, `describe`, `username`, `time`) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$data['title'],$data['all'],$data['price1'],$data['price2'],$data['phonenumber'],$data['truename'],$data['area'],$data['describe'],session('username'),date("Y-m-d H:i:s"));
		return mysql_query($sql);
	}
	public function show($data){ 
		$sql = "select * from goods where id =".$data." limit 1";
		$query = mysql_query($sql);
		$row = mysql_fetch_row($query);
        return $row;

	}
	public function cart($data){
		$sql = "SELECT `id` FROM `cart` WHERE `gid` ='".$data["gid"]."' and `username`= '".session('username')."'";
		$result = mysql_query($sql);
		$row = mysql_fetch_row($result);
		if ($row == null){
			$sql = "INSERT INTO `cart`( `image`, `name`, `price`, `username`,`gid`) VALUES ('".$data["image"]."','".$data["name"]."','".$data["price"]."','".session('username')."','".$data["gid"]."')";
			mysql_query($sql);
		}
	}
	public function showcart(){
		$sql = "SELECT * FROM `cart` WHERE `username`= '".session('username')."'";
		$query = mysql_query($sql);
		$result = array( );
		while($row = mysql_fetch_row($query)) {
			$result[] = $row;
}
        return $result;
	}
	public function delcart($data){
		$sql = "DELETE FROM `cart` WHERE `id` = '".$data["id"]."'";
		mysql_query($sql);
	}
	public function showgoods(){
		$sql = "SELECT * FROM `goods` order by `id` desc limit 9";
		$query = mysql_query($sql);
		$result = array( );
		while($row = mysql_fetch_row($query)) {
			$result[] = $row;
}
		return $result;
	}
	public function products($data,$price=null,$page=null){
		if(strlen($data) == 1){
			$arr =  array('a' =>"家用电器",'b'=>"电脑数码",'c'=>"汽车装饰",'d'=>"家居家饰",'e'=>"办公用品",'f'=>"其他分类" );
			if($data == "f"){
				$sql ="SELECT * FROM `goods` where `class` = '旅游运动' or `class` = '宠物宝贝' or `class` = '古董收藏' ";
			}else{
				$sql ="SELECT * FROM `goods` where `class` = '".$arr[$data]."'";
			}
		}else{
			$sql ="SELECT * FROM `goods` where `list` = '".$data."'";
		}
		if($price ==null){
			$sql .=" order by `id` desc limit ".$page.",9";
		}else{
			$sql .=" order by `newprice` ".$price." limit ".$page.",9";
		}
		$query = mysql_query($sql);
		$result = array( );
		while($row = mysql_fetch_row($query)) {
			$result[] = $row;
}
		return $result;
	}
	public function count($data){
		if(strlen($data) == 1){
			$arr =  array('a' =>"家用电器",'b'=>"电脑数码",'c'=>"汽车装饰",'d'=>"家居家饰",'e'=>"办公用品",'f'=>"其他分类" );
			if($data == "f"){
				$sql ="SELECT count(*) FROM `goods` where `class` = '旅游运动' or `class` = '宠物宝贝' or `class` = '古董收藏' ";
			}else{
				$sql ="SELECT count(*) FROM `goods` where `class` = '".$arr[$data]."'";
			}
		}else{
			$sql ="SELECT count(*) FROM `goods` where `list` = '".$data."'";
		}
		$query = mysql_query($sql);
		$row = mysql_fetch_row($query);
		return $row;
	}
	public function other($data,$id){
		$sql = "SELECT * FROM `goods` WHERE `list` = '".$data."' and `id` != '".$id."'";
		$query = mysql_query($sql);
		$result = array( );
		while($row = mysql_fetch_row($query)) {
			$result[] = $row;
		}
		return $result;
	}
	public function search($data,$count=null,$page){
		if($count !=null){
			$sql = "SELECT count(*) FROM `goods` WHERE `title` like '%".$data."%' or `class` like '%".$data."%' or `list` like '%".$data."%'";
			$query = mysql_query($sql);
			$row = mysql_fetch_row($query);
			return $row;
		}else{
			if($data == null){
				$sql = "SELECT * FROM `goods` WHERE 1 limit ".$page.",9";
			}else{
			$sql = "SELECT * FROM `goods` WHERE `title` like '%".$data."%' or `class` like '%".$data."%' or `list` like '%".$data."%' limit ".$page.",9";
			}
		}
		$query = mysql_query($sql);
		$result = array( );
		while($row = mysql_fetch_row($query)) {
			$result[] = $row;
		}
		return $result;
	}
	public function user_product(){
		$sql = "SELECT * FROM `goods` WHERE `username` = '".session("username")."'";
		$query = mysql_query($sql);
		$result = array( );
		while($row = mysql_fetch_row($query)) {
			$result[] = $row;
		}
		return $result;
	}
	public function del($data){
		$sql = "DELETE FROM `goods` WHERE `id` = '".$data."' limit 1";
		 mysql_query($sql);
	}
	public function updata($data){
		$sql = "SELECT * FROM `goods` WHERE `id` = '".$data."' limit 1";
		$query = mysql_query($sql);
		return mysql_fetch_row($query);
	}
	public function updata_post($data){
		$sql = sprintf("UPDATE `goods` SET `title`= '%s',`class`='%s',`list`='%s',`name`='%s',`new`='%s',`price`='%s',`sum`='%s',`newprice`='%s',`sendprice`='%s',`phonenumber`='%s',`truename`='%s',`images`='%s',`area`='%s',`describe`='%s' where `id` ='".$data['id']."'",$data['title'],$data['all'],$data['classlist'],$data['name'],$data['new'],$data['price'],$data['sum'],$data['newprice'],$data['sendprice'],$data['phonenumber'],$data['truename'],$data['images'],$data['area'],$data['describe']);
		$query = mysql_query($sql);
		return $query;
	}
	public function wanted($count = null,$page =null){
		if($count){
			$sql ="SELECT count(*) FROM `want` WHERE 1";
			$query = mysql_query($sql);
			$row = mysql_fetch_row($query);
			return $row;
		}
		if(isset($page)){
			$sql ="SELECT * FROM `want` WHERE 1 order by `id` desc limit ".$page.",10";
		}else{
			$sql ="SELECT * FROM `want` WHERE 1 order by `id` desc limit 5";
		}
		$query = mysql_query($sql);
		$result = array( );
		while($row = mysql_fetch_row($query)) {
			$result[] = $row;
		}
		return $result;
	}
	public function wants($id){
		$sql = "UPDATE `want` SET `click`=click+1 WHERE `id` =".$id;
		$query = mysql_query($sql);
		$sql = "SELECT * FROM `want` WHERE `id` =".$id;
		$query = mysql_query($sql);
		return mysql_fetch_row($query);
	}
	public function countall(){
		$count=array();
		$sql = "SELECT count(*) FROM `user` WHERE 1";
		$query = mysql_query($sql);
		$count["user"]= mysql_fetch_row($query)[0];
		$sql = "SELECT count(*) FROM `goods` WHERE 1";
		$query = mysql_query($sql);
		$count["goods"]= mysql_fetch_row($query)[0];
		$sql = "SELECT count(*) FROM `want` WHERE 1";
		$query = mysql_query($sql);
		$count["want"]= mysql_fetch_row($query)[0];
		return $count;
	}


}


 ?>