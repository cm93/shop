<?php
namespace Home\Controller;
use Think\Controller;
use Think\Db;
class UserController extends Controller{
    public function login(){
        if(!empty($_POST)){
            $User = new \Home\Model\UserModel();
            $status = $User->check($_POST);
            if($status['status'] == 1){
                session('username',$_POST['username']);
                $User->lastlogin($_POST['username']);
            }
            $this->ajaxReturn($status,json);
        }
        $this->display();
    }
    public function logout(){
        session('username',null);
        $this->display('Index/index');
    }
    public function verifyIMG(){
        $config=array(
            'fontSize'  => 15,
            'imageH'    => 33,
            'imageW'    => 120,
            'length'    => 4,
            'useCurve'  =>false,
            'useNoise'  => false,
            'fontttf'   => '4.ttf',
            'useImgBg'  =>true,
        );
        $verify=new \Think\Verify($config);
        $verify->entry();
    }
    public function check_verify(){
        $verify = new \Think\Verify();
        $result = $verify->check($_POST["code"]);
        $this->ajaxReturn($result,json);
    }
    public function register(){
        if (!empty($_POST)){
            $User = new \Home\Model\UserModel();
            $result = $User->add($_POST);
            if($result){
                $this->success('新增成功', HOME.'index.php');
                session('username',$_POST['username']);
            } else {
                $this->error('新增失败');
            }
        }
        $this->display();
    }
}