<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
    public function login(){
        if(!empty($_POST)){
            $User = new \Home\Model\UserModel();
            $result = $User->check($_POST);
            if($result){
                $this->success('登录成功', '/shop/index.php');
            } else {
               
            }
        }
        $this->display();
    }
    public function verifyIMG(){
        $config=array(
            'fontSize'  => 15,
            'imageH'    => 33,
            'imageW'    => 100,
            'length'    => 4,
            'useCurve'  =>false,
            'useNoise'  => false,
            'fontttf'   => '4.ttf',
            'useImgBg'  =>true,
    
        );
        $verify=new \Think\Verify($config);
        $verify->entry();
    }
    public function register(){
        if (!empty($_POST)){
            $User = new \Home\Model\UserModel();
            $result = $User->add($_POST);
            if($result){
                $this->success('新增成功', '/shop/index.php');
            } else {
                $this->error('新增失败');
            }
        }
        $this->display();
    }
}