<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	if(cookie("admin")){
    	$server = array();
    	$server["os"]= $this->getOS();
    	$server["browser"]= $this->browser($_SERVER['HTTP_USER_AGENT']);
    	$server["ip"]= get_client_ip();
    	$Goods = new \Home\Model\GoodsModel();
    	$result = $Goods->countall();
    	$this->assign("count",$result);
    	$this->assign("server",$server);
    	$this->display();
    	}else{
    		$this->display("User/login");
    	}
    }
    public function content(){
    	$Goods = new \Home\Controller\GoodsController();
    	$Goods->wanted();
    }
    public function goods(){
    	$Goods = new \Home\Model\GoodsModel();
    	$count = $Goods->countgoods();
    	$page  = new \Think\Page($count,9);
    	$show  = $page->show();
        $totle = $page->totalRows;
        $result = $Goods->search(null,null,$page->firstRow);
        $page->setConfig('header','件商品');
        $this->assign('goods',$result);
        $this->assign('page',$show);
        $this->assign('totle',$totle);
        $this->display();
    }
 
    public function browser ($Agent) {
		$browseragent="";   //浏览器
		$browserversion=""; //浏览器的版本
		if (ereg('MSIE ([0-9].[0-9]{1,2})',$Agent,$version)) {
		 	$browserversion=$version[1];
		 	$browseragent="Internet Explorer";
		} else if (ereg( 'Opera/([0-9]{1,2}.[0-9]{1,2})',$Agent,$version)) {
		 	$browserversion=$version[1];
		 	$browseragent="Opera";
		} else if (ereg( 'Firefox/([0-9.]{1,5})',$Agent,$version)) {
		 	$browserversion=$version[1];
		 	$browseragent="Firefox";
		}else if (ereg( 'Chrome/([0-9.]{1,3})',$Agent,$version)) {
		 	$browserversion=$version[1];
		 	$browseragent="Chrome";
		}
		else if (ereg( 'Safari/([0-9.]{1,3})',$Agent,$version)) {
		 	$browseragent="Safari";
		 	$browserversion="";
		}
		else {
			$browserversion="";
			$browseragent="Unknown";
		}
		return $browseragent." ".$browserversion;
		}
    public function getOS(){
		$os='';
		$Agent=$_SERVER['HTTP_USER_AGENT'];
		if (eregi('win',$Agent)&&strpos($Agent, '95')){
			$os='Windows 95';
		}elseif(eregi('win 9x',$Agent)&&strpos($Agent, '4.90')){
			$os='Windows ME';
		}elseif(eregi('win',$Agent)&&ereg('98',$Agent)){
			$os='Windows 98';
		}elseif(eregi('win',$Agent)&&eregi('nt 5.0',$Agent)){
			$os='Windows 2000';
		}elseif(eregi('win',$Agent)&&eregi('nt 6.0',$Agent)){
			$os='Windows Vista';
		}elseif(eregi('win',$Agent)&&eregi('nt 6.1',$Agent)){
			$os='Windows 7';
		}elseif(eregi('win',$Agent)&&eregi('nt 5.1',$Agent)){
			$os='Windows XP';
		}elseif(eregi('win',$Agent)&&eregi('nt',$Agent)){
			$os='Windows NT';
		}elseif(eregi('win',$Agent)&&ereg('32',$Agent)){
			$os='Windows 32';
		}elseif(eregi('linux',$Agent)){
			$os='Linux';
		}elseif(eregi('unix',$Agent)){
			$os='Unix';
		}else if(eregi('sun',$Agent)&&eregi('os',$Agent)){
			$os='SunOS';
		}elseif(eregi('ibm',$Agent)&&eregi('os',$Agent)){
			$os='IBM OS/2';
		}elseif(eregi('Mac',$Agent)&&eregi('PC',$Agent)){
			$os='Macintosh';
		}elseif(eregi('PowerPC',$Agent)){
			$os='PowerPC';
		}elseif(eregi('AIX',$Agent)){
			$os='AIX';
		}elseif(eregi('HPUX',$Agent)){
			$os='HPUX';
		}elseif(eregi('NetBSD',$Agent)){
			$os='NetBSD';
		}elseif(eregi('BSD',$Agent)){
			$os='BSD';
		}elseif(ereg('OSF1',$Agent)){
			$os='OSF1';
		}elseif(ereg('IRIX',$Agent)){
			$os='IRIX';
		}elseif(eregi('FreeBSD',$Agent)){
			$os='FreeBSD';
		}elseif($os==''){
			$os='Unknown';
		}
		return $os;
}
    
}