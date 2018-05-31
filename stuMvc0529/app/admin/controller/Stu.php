<?php
namespace app\admin\controller;
use core\model\Model;
use core\Controller;
use core\view\View;
use system\model\Stu as s;
use system\model\Grade;
class Stu extends Common {


//加载学生列表首页模板
    public function index(){
        //定义一个SQL语句查询关联表数据，获取到所有的学生和对应的班级名称
//        $sql = 'select *  from stu join grade on stu.gid = grade.id ';
        //有相同ID的时候ID会被后面的ID覆盖 所以这里不查询grade里面的ID。
        $sql = 'select s.*,g.gname from stu as s inner join grade as g on s.gid = g.id';
        $class = s::query($sql)->toArray();
//        echo '<pre>';
//        print_r($class);die;
        //获取学生数据在列表页显示
        $data = s::get()->toArray();
        return View::make()->with('stu',$data)->with('class',$class);
    }


//加载添加学生模板
    public function create(){
        //获取学生班级的所有数据显示到列表页,在页面循环进行选择
        $data = Grade::get()->toArray();
//        echo '<pre>';
//        print_r($data);die;
        return View::make()->with('grade',$data);
    }



    //定义添加学生的方法
    public function add(){
        //获取post数据
        $post = $_POST;
        $stustr = s::add($post);
        if ($stustr){
            return $this->redirect('index.php?s=admin/stu/index')->message('添加成功');
        }else{
            return $this->redirect()->message('添加失败');
        }
    }


    //编辑学生信息方法
    public function edit(){
        //获取当前学生资料对应的数据库ID
        $id = $_GET['id'];
        //获取当前学生的资料并传递给with方法分配到页面显示
        $data = s::find($id)->toArray();
        //获取所有班级信息 通过with分配到页面循环显示
        $banji = Grade::get()->toArray();
//        echo '<pre>';
//        print_r($data);die;
        if($_POST){
            //获取POST数据
            $post = $_POST;
            //调用框架修改数据方法并写入数据库中
            $stuedit = s::edit($post);
            //判断返回结果根据不同的结果给用户不同的修改结果提示信息
            if($stuedit){
                return $this->redirect('index.php?s=admin/stu/index')->message('编辑成功');
            }else{
                return $this->redirect()->message('编辑失败');
            }
        }
        //加载编辑模板,分配获取到的数据到页面显示
        return View::make()->with('stu',$data)->with('grade',$banji);
    }




    public function delete(){
        //获取需要删除的学生的id
        $id = $_GET['id'];
        $result = s::delete($id);
        //判断返回结果是否为真,提示不同消息并跳转或返回
        if ($result){
            return $this->redirect('index.php?s=admin/stu/index')->message('删除成功');
        }else{
            return $this->redirect()->message('删除失败');
        }

    }


    public function ajaxDelete(){
        //获取get参数中的需要删除的班级id
        $id = $_GET['id'];
        //将对应$id的班级数据删除
        $result = s::delete($id);
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