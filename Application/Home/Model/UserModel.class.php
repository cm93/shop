<?php
namespace Home\Model;
use Think\Model;
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
        $query = $this->query($sql);
        dump($query);
        $result=mysql_fetch_row($query);
        print_r($result);
        if($result[password] == md5($data[password])){
            echo "asdasdas";
            return true;
        }else{
            return false;
        }
    }
}

?>