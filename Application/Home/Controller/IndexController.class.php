<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $Goods = new \Home\Model\GoodsModel();
        $result = $Goods->showgoods();
        $row = $Goods->wanted();
        $this->assign('want',$row);
        $this->assign('goods',$result);
        $this->display();
    }
    public function user(){
        $User = new \Home\Model\UserModel();
        $row = $User->showdetail();
        $this->assign('data',$row);
        if($_GET['Action'] == "Face"){
            $this->display("face");
        }else if($_GET['Action'] == "FaceSave"){
            if(!empty($_POST)){
                $result = $User->facesave($_POST);
                if($result){
                    $this->success("修改成功","user?Action=Face");
                }
            }
        }else {
            if(!empty($_POST)){
                $result = $User->detail($_POST);
                if($result){
                    $this->success("修改成功","user");
                }
            }
            $this->display();
        }
    }
    public function member(){
        $User = new \Home\Model\UserModel();
        $row = $User->showdetail();
        $this->assign('data',$row);
        $this->display();
    }
    public function user_product(){
        $Goods = new \Home\Model\GoodsModel();
        $result = $Goods->user_product();
        $this->assign("data",$result);
        if($_GET["del"]){
            $Goods->del($_GET["del"]);
        }
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
    public function email(){
        $User = new \Home\Model\UserModel();
        $row = $User->showdetail();
        $mail = new \Org\Util\PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.163.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '18258022898@163.com';                 // SMTP username
        $mail->Password = '584520';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25;                                    // TCP port to connect to
        
        $mail->From = '18258022898@163.com';
        $mail->FromName = 'James';
        $mail->addAddress($row[5]);               // Name is optional
        
        $mail->isHTML(true);                                  // Set email format to HTML
        
        $mail->Subject = '二手网会员邮箱认证申请！';
        $mail->Body    = '尊敬的用户：</br>您好,感谢您对本站的支持，您的邮箱认证申请已成功，请在24小时内点击以下链接来完成认证申请。</br> 注意：经过认证后，您将不能修改邮箱地址。</br>
'.'http://localhost/shop/home/index/checkemail?email='.$row[5].'&user='.session('username').'</br>
(如果不能点击该链接地址，请复制并粘贴到浏览器的地址输入框)</br>
</br>
    想提高您的会员诚信度，进行会员信息认证。认证用户所发布的信息对于其他浏览用户来说更具真实性，将更受欢迎。</br>
            ';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        if(!$mail->send()) {
            $this->error("邮箱信息不正确");
        } else {
            $this->success("邮件已经发送请在24小时内认证");
        }
    }
    public function checkemail(){
        $User = new \Home\Model\UserModel();
        $reslut = $User->email($_GET);
        if($reslut){
            $this->success("认证成功",'./member');
        }else{
            $this->error("认证失败",'./member');
        }
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
    public function seach(){
        echo "aaaaa";
    }
    public function showgoods(){
        
    }
}