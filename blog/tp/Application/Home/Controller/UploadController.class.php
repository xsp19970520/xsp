<?php
namespace Home\Controller;
use Think\Controller;
class UploadController extends Controller {
	 public function upload(){
	 	$this->display();
	 }
        public function add(){
        $m=M('data');
        $m->name=I('name');
        $m->title=I('title');
        $m->content=I('content');
        $m->date=date('y-m-d',time());
        $i=$m->add();
        $this->display();
    }


}