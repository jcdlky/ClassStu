<?php
namespace app\admin\controller;
use core\view\View;
use system\model\Grade as g;
use system\model\Stu;
class Grade extends Common{
    //定义添加班级的方法
    public function index(){
        //定义一个SQL语句查询关联表数据，获取到所有的学生和对应的班级名称并对班级的人数进行统计
        $sql = 'select grade.gname,grade.id,count(stu.name) as num from stu right join grade on stu.gid = grade.id group by grade.id';
        $class = g::query($sql)->toArray();
//        echo '<pre>';
//        print_r($class);die;
        //获取班级数据库表中的所有数据，这
        $data = g::get()->toArray();
        //加载班级列表模板
        return View::make()->with('grade',$data)->with('class',$class);
    }


//定义添加的方法
    public function add(){
        //获取post数据
        $post = $_POST;
        //将post数据插入数据库
        $result = g::add($post);
        //判断返回结果并返回提示信息
        if ($result){
            return $this->redirect('index.php?s=admin/grade/index')->message('添加成功');
        }else{
            return $this->redirect()->message('添加失败');
        }
    }

    public function create(){
        return View::make();
    }


//定义编辑的方法
    public function edit(){
        //获取GET传递的ID
        $id = $_GET['id'];
        //查找ID对应数据库的内容
        $class = g::get()->toArray();
        //降维处理
//        $class = current($class);
//        echo '<pre>';
//        print_r($class);die;
        $data = g::find($id)->toArray();
        //判断是否POST递交
        if($_POST){
            //获取post数据
            $post=$_POST;
            //判断当前修改的班级名称是否和数据库库中的名称一样，如果一样就返回重新修改
            foreach ($class as $k => $v){
                if($post['gname'] == $v['gname']){
                    return $this->redirect()->message('班级已经存在');
                }
            }

            //将post数据插入grade表中，调用edit方法这里的g就是上面的grade的别名。
            $result = g::edit($post);
//        echo "<pre>";
//        print_r($post) ;die;
            //对修改后的返回信息进行判断
            if ($result){
                return $this->redirect('index.php?s=admin/grade/index')->message('编辑成功');
            }else{
                return $this->redirect()->message('编辑失败');
            }
        }
        //调用模板
        return View::make()->with('data',$data['gname']);
    }




    public function delete(){
        //获取需要删除班级的id
        $id = $_GET['id'];
        $result = g::delete($id);
        //判断返回结果是否为真,提示不同消息并跳转或返回
        if ($result){
            return $this->redirect('index.php?s=admin/grade/index')->message('删除成功');
        }else{
            return $this->redirect()->message('删除失败');
        }

    }


    public function ajaxDelete(){
        //获取get参数中的需要删除的班级id
        $id = $_GET['id'];
        //将对应$id的班级数据删除
        $result = g::delete($id);
        //判断$result返回结果是否为真,返回给前台不同的处理结果
        if ($result){
            //如果为真,删除成功
            return json_encode(['valid' => 1,'message' => '班级删除成功']);
        }else{
            //为假,删除失败
            return json_encode(['valid' => 0,'message' => '班级删除失败']);
        }
    }



    public function look(){
        $name = $_GET['name'];
        $sql = 'select stu.id,stu.name,grade.gname from stu inner join grade on stu.gid = grade.id where grade.gname = '."'".$name."'";
        $class = g::query($sql)->toArray();
//        echo "<pre>";
//        print_r($class);die;
        return View::make()->with('class',$class);
    }

    public function stuInfo(){
        //获取get参数中的需要查看资料的学生id
        $id = $_GET['id'];
        //自己组合sql语句，用学生表关联班级表
        $sql = "select stu.*,grade.gname from stu join grade on stu.gid = grade.id where stu.id = " . $id;
        //执行query获取所有数据
        $stuInfo = Stu::query($sql)->toArray();
        //降维处理
        $stuInfo = current($stuInfo);
//        echo '<pre>';
//        print_r($stuInfo);
//        加载模板
        return View::make()->with('stuinfo',$stuInfo);
    }



}







?>