<?php
namespace Admin\Model;
use Think\Model;
use Think\Crypt\Driver\Think;
class UserModel extends Model {
	protected $trueTableName = 'admin';
    protected $dbName = 'shop';
    public function login($data){
    	$sql = "SELECT `id`,`lastlogin`,`times` FROM `admin` WHERE `username` = '".$data['admin']."' and `passwrod` ='".md5($data["password"])."'";
    	$query = mysql_query($sql);
    	$result = mysql_fetch_assoc($query);
        cookie("lastlogin",$result["lastlogin"]);
        cookie("times",$result["times"]);
    	if($result){
    		$sql = "UPDATE `admin` SET `lastlogin`='".date("Y-m-d H-i-s")."',`times`= times+1 WHERE `id` = ".$result["id"];
    		$query = mysql_query($sql);
    		$status = array("status"=>1);
    	}else{
    		$status = array("status"=>0);
    	}
        return $status;
    	
    }
}
?>