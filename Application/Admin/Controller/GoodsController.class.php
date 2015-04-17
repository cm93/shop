<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
	public function content(){
		$Goods = new \Home\Controller\GoodsController();
    	$Goods->wants();
	}
	public function content_update(){
		$Goods = new \Admin\Model\GoodsModel();
		$result = $Goods->content_update($_POST);
		if($result){
			$this->success('修改成功', ADMIN.'index/content');
		}else{
			$this->error('修改失败');
		}
	}
	public function content_del(){
		$Goods = new \Admin\Model\GoodsModel();
		$result = $Goods->content_del($_GET['id']);
		if($result){
			$this->success('修改成功', ADMIN.'index/content');
		}else{
			$this->error('修改失败');
		}
	}
	public function del_contents(){
		$dels = str_replace(",", " or id=", substr($_POST['dels'], 0,-1));
		$Goods = new \Admin\Model\GoodsModel();
		$result = $Goods->content_del($dels);
		if($result){
			$this->success('修改成功', ADMIN.'index/content');
		}else{
			$this->error('修改失败');
		}
	}
	public function del_goods(){
		$Goods = new \Home\Model\GoodsModel();
		if($_GET["del"]){
            $Goods->del($_GET["del"]);
        }
      echo "<script>window.location.href='".ADMIN."index/goods'; </script>";
	}
	public function del_more(){
		$dels = str_replace(",", " or id=", substr($_POST['dels'], 0,-1));
		$Goods = new \Home\Model\GoodsModel();
		$Goods->del($dels);
		      echo "<script>window.location.href='".ADMIN."index/goods'; </script>";

	}
}