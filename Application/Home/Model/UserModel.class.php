<?php
namespace Home\Model;
use Think\Model;
use Think\Crypt\Driver\Think;
class UserModel extends Model {
    protected $trueTableName = 'user';
    protected $dbName = 'shop';
    public function add($data){
        $sql = sprintf("INSERT INTO `user`(`username`, `passwrod`, `phonenumber`, `email`) VALUES ('%s','%s',%u,'%s')",$data['username'],md5($data['password']),(int)$data['phonenumber'],$data['email']);
        $result = mysql_query($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function check($data){
        $sql = sprintf("SELECT `passwrod` FROM `user` WHERE `username`= '%s' LIMIT 1",$data['username']);
        $query = mysql_query($sql);
        $row = mysql_fetch_row($query);
        if($row[0] == md5($data[password])){
            $status = array("status"=>1);
        }else{
            $status = array("status"=>0);
        }
        return $status;
    }
}

?>