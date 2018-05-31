<?php
namespace app\admin\controller;
use system\model\Article as a;
use core\view\View;
class Article extends Common{

    public function index(){
        $sql = 'select * from article';
        $class = a::query($sql)->toArray();
//        echo '<pre>';
//        print_r($class);
        return View::make()->with('article',$class);
    }


    //发布文章的方法
    public function add(){
        if($_POST){
            //获取post数据
            $post =$_POST;
            //获取当前发布的时间
            $post['time'] = date('Y-m-d H:i:s');
            $post['username'] = $_SESSION['username'];
//        echo '<pre>';
//        print_r($post);die;
            //将post数据插入数据库
            $result = a::add($post);
            //判断返回结果并返回提示信息
            if ($result){
                return $this->redirect('index.php?s=admin/article/index')->message('发布成功');
            }else{
                return $this->redirect()->message('发布失败');
            }
        }

        return View::make();
    }




    //编辑文章方法
    public function edit(){
        //获取文章GET参数
        $id = $_GET['id'];
        //查找ID对应的数据内容
        $data = a::find($id)->toArray();
//                echo "<pre>";
//        print_r($data) ;die;
        //判断是否POST递交
        if($_POST){
            //获取post数据
            $post = $_POST;
            //将POST数据写入数据库中
            $result = a::edit($post);
            //对返回的信息进行判断
            if ($result){
                return $this->redirect('index.php?s=admin/article/index')->message('编辑成功');
            }else{
                return $this->redirect()->message('编辑失败');
            }
        }
        return View::make()->with('data',$data);
    }




    public function delete(){
        //获取需要删除班级的id
        $id = $_GET['id'];
        $result = a::delete($id);
        //判断返回结果是否为真,提示不同消息并跳转或返回
        if ($result){
            return $this->redirect('index.php?s=admin/article/index')->message('删除成功');
        }else{
            return $this->redirect()->message('删除失败');
        }

    }


    public function ajaxDelete(){
        //获取get参数中的需要删除的班级id
        $id = $_GET['id'];
        //将对应$id的班级数据删除
        $result = a::delete($id);
        //判断$result返回结果是否为真,返回给前台不同的处理结果
        if ($result){
            //如果为真,删除成功
            return json_encode(['valid' => 1,'message' => '删除成功']);
        }else{
            //为假,删除失败
            return json_encode(['valid' => 0,'message' => '删除失败']);
        }
    }



}


?>