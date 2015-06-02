<?php
namespace Home\Controller;
use Think\Controller;
class BlogController extends Controller {
	public function blog(){

        $m= M('data');
        $count= $m->count();
        $Page = new  \Think\Page($count, 5);
        $show = $Page->show();
        $orderby['id']='';
        $list = $m->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);

        
        $condition['title'] = 'tag1';
        $number1 = $m->where($condition)->count();
        $this->assign('title1',$number1);


        $condition['title'] = 'tag2';
        $number2 = $m->where($condition)->count();
        $this->assign('title2',$number2);


        $condition['title'] = 'tag3';
        $number3 = $m->where($condition)->count();
        $this->assign('title3',$number3);
        $this->display();
        

}
    public function content(){

        $m= M('data');
        $count= $m->count();
        $Page = new  \Think\Page($count, 1);
        $show = $Page->show();
        $orderby['id']='';
        $list = $m->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        
        $Data = M('comment'); // 实例化Data数据模型,这行的tinyphp为数据表后缀名称
        $this->data = $Data->select(); 
        $this->display();
    }


    public function upload(){
        $m=M('comment');
        $m->id=I('id');
        $m->data=I('data');
        $i=$m->add();
        $this->display();
    }
    public function title(){
    $data = M("data"); // 实例化title对象
    $condition['title'] = 'tag1';
    $data->where($condition)->select(); 
    $count= M('data')->count();
    $this->assign('title',$count);
    $this->display();

}
}