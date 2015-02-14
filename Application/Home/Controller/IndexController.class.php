<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function user(){
        $User = new \Home\Model\UserModel();
        if(!empty($_POST)){
            $result = $User->detail($_POST);
            if($result){
                $this->success("修改成功","user");
            }
        }
        $row = $User->showdetail();
        $this->assign('data',$row);
        $this->display();
    }
    public function member(){
        $this->display();
    }
    public function user_product(){
        $this->display();   
    }
    public function user_classadd(){
        $this->display();
    }
    public function user_collection(){
        $this->display();
    }
    public function user_message(){
        $this->display();
    }
    public function payonline(){
        if($_GET['action'] == "detail"){
            $this->display("detail");
        }else {
            $this->display();
        }
    }
    public function payrecodes(){
        $this->display();
    }
}