<?php
namespace Home\Model;
use Think\Model;
use Think\Crypt\Driver\Think;
class UserModel extends Model {
    protected $trueTableName = 'user';
    protected $dbName = 'shop';
    public function add($data){
        $sql = sprintf("INSERT INTO `user`(`username`, `password`, `phonenumber`, `email`,`lastlogin`) VALUES ('%s','%s','%s','%s','%s')",$data['username'],md5($data['password']),$data['phonenumber'],$data['email'],date("Y-m-d H:i:s"));
        $result = mysql_query($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function check($data){
        $sql = sprintf("SELECT `password` FROM `user` WHERE `username`= '%s' LIMIT 1",$data['username']);
        $query = mysql_query($sql);
        $row = mysql_fetch_row($query);
        if($row[0] == md5($data[password])){
            $status = array("status"=>1);
        }else{
            $status = array("status"=>0);
        }
        return $status;
    }
    public function lastlogin($username){
        $sql = sprintf("UPDATE `user` SET `lastlogin`='%s' WHERE `username` = '%s' ",date("Y-m-d H:i:s"),$username);
        mysql_query($sql);
    }
}

?>