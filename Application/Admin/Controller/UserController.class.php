<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
        if(!empty($_POST)){
    	   $User = new \Admin\Model\UserModel();
    	   $status = $User->login($_POST);
    	   cookie("admin",$_POST['admin']);
           $this->ajaxReturn($status,'json');
    	}
    	$this->display();
    }
    public function logout(){
    	cookie("admin",null);
    	$this->display("login");
    }
}