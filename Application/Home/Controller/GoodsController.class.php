<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function contact(){
        $this->display();
    }
    public function details(){
    	$Goods = new \Home\Model\GoodsModel();
    	$result = $Goods->show($_GET['id']);
        $other = $Goods->other($result[3],$result[0]);
    	$this->assign('data',$result);
        $this->assign('other',$other);
        if(!$_GET){
            $this->display("empty:index"); 
        }else{
        $this->display();
        }
    }
    public function products(){
        $Goods = new \Home\Model\GoodsModel();
        if($_GET["class"]){
            $count = $Goods->count($_GET["class"])[0];
            $page  = new \Think\Page($count,9);
            $show  = $page->show();
            $result = $Goods->products($_GET["class"],$_GET["price"],$page->firstRow);
        }elseif($_POST){
            $count = $Goods->search($_POST["search"],1)[0];
            $page  = new \Think\Page($count,9);
            $show  = $page->show();
            $totle = $page->totalRows;
            $result = $Goods->search($_POST["search"],null,$page->firstRow);
        }elseif($_GET['search']){
            $count = $Goods->search($_GET['search'],1)[0];
            $page  = new \Think\Page($count,9);
            $show  = $page->show();
            $totle = $page->totalRows;
            $result = $Goods->search($_GET['search'],null,$page->firstRow);
        }else{
            $count = $Goods->search(null,1)[0];
            $page  = new \Think\Page($count,9);
            $show  = $page->show();
            $totle = $page->totalRows;
            $result = $Goods->search(null,null,$page->firstRow);
        }
        $page->setConfig('header','件商品');
        $this->assign('goods',$result);
        $this->assign('page',$show);
        $this->assign('totle',$totle);
        $this->assign('search',$_POST["search"]);
        $this->display();
    }
    public function upload(){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
    $upload->savePath  =     ''; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    $this->display("release");
    if($info){ 
    	foreach($info as $file){
        $path = UPLOAD.$file['savepath'].$file['savename'];
    	}
        echo "<script>parent.callback('".$path."',true,".date("is").")</script>"; 
    }else{ 
    	$error = $upload->getError();
    	echo "<script>parent.callback('".$error."',false,".date("is").")</script>"; 
    }
}
    public function release(){
    	$ip = get_client_ip();
    	$row=file_get_contents("http://ipapi.sinaapp.com/api.php?f=json&ip=".$ip);
    	$area = json_decode($row)->area1;
    	$this->assign('area',$area);
        $this->display();
    }
    public function want(){
        $ip = get_client_ip();
        $row=file_get_contents("http://ipapi.sinaapp.com/api.php?f=json&ip=".$ip);
        $area = json_decode($row)->area1;
        $this->assign('area',$area);
        $this->display();
    }
    public function wanted(){
        $Goods = new \Home\Model\GoodsModel();
        $count = $Goods->wanted("count")[0];
        $page  = new \Think\Page($count,10);
        $show  = $page->show();
        $result = $Goods->wanted(null,$page->firstRow);
        $page->setConfig('header','条信息');
        $this->assign('page',$show);
        $this->assign('data',$result);
        $this->display();
    }
    public function wants(){
        $Goods = new \Home\Model\GoodsModel();
        $result = $Goods->wants($_GET["id"]);
        $this->assign('data',$result);
        $this->display();
    }
    public function want_post(){
        $Goods = new \Home\Model\GoodsModel();
        $result = $Goods->want_post($_POST);
        if($result){ 
            $this->success('新增成功', '/shop/home/goods/wanted');
        }else{ 
            $this->error('新增失败');
        };
    }
    public function commit(){
    	$Goods = new \Home\Model\GoodsModel();
    	$result = $Goods->goods($_POST);
    	if($result){ 
    		$this->success('新增成功', '/shop/home/goods/details?id='.mysql_insert_id());
    	}else{ 
    		$this->error('新增失败');
    	}
    }
    public function cart(){
    	$Goods = new \Home\Model\GoodsModel();
    	$Goods->cart($_POST);
    	$result = $Goods->showcart();
    	$this->ajaxReturn($result,json);
    }
    public function showcart(){
    	$Goods = new \Home\Model\GoodsModel();
    	$result = $Goods->showcart();
    	$this->ajaxReturn($result,json);
    	time_sleep_until(time()+10);
    }
    public function delcart(){
    	$Goods = new \Home\Model\GoodsModel();
    	$result = $Goods->delcart($_GET);
    }
    public function updata(){
        $Goods = new \Home\Model\GoodsModel();
        $result = $Goods->updata($_GET["id"]);
        $judge = $result[14] == session("username") ? true : false;
        if($judge){
            $this->assign("data",$result);
        }
        if($_POST){
            $result = $Goods->updata_post($_POST);
            if($result){ 
            $this->success('修改成功', '/shop/home/goods/details?id='.$_POST["id"]);
        }else{ 
            $this->error('修改失败');
        }
        }
        $this->assign("judge",$judge);
        $this->display();
    }
}