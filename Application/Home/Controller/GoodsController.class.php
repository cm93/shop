<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function contact(){
        $this->display();
    }
    public function details(){
        $this->display();
    }
    public function products(){
        $this->details();
    }
   
}