<?php
namespace Admin\Model;
use Think\Model;
use Think\Crypt\Driver\Think;
class GoodsModel extends Model {
	public function content_update($data){
		$sql = sprintf("UPDATE `want` SET `title`='%s',`price1`='%s',`price2`='%s',`phonenumber`='%s',`truename`='%s',`describe`='%s' WHERE `id` = '%s'",$data['title'],$data['price1'],$data['price2'],$data['phonenumber'],$data['truename'],$data['describe'],$data['id']);
		return mysql_query($sql);
	}
	public function content_del($id){
		$sql = "DELETE FROM `want` WHERE id= ".$id;
		return mysql_query($sql);
	}

}