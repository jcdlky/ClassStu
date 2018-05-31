<?php

namespace app\home\controller;

use core\Controller;
use core\model\Model;
use core\view\View;
use system\model\Article;
use system\model\Stu;
class Entry extends Controller
{

    public function index()
    {
        //调用module方法中Base里面的find查找数据的方法
        $result = Article::where('id > 1')->get()->toArray();


        //调用前台首页的方法
//        return View::make();
//        datas($result)调用了Base下面的datas方法并返回了数据执行了对象返回的自动加载。这样模板页面就可以得到$this->news的数据进行循环输出
        return (new View())->make()->with('version','版本:v1.9')->datas($result);//这个传递的参数会传递到View里面寻找方法 view会接收到传递的这个值。在去Base里面寻找当前with的方法
        //主管文件接到这个返回 执行echo将这个文件输出给用户视图

    }


    public function stu(){
        //定义一个SQL语句查询关联表数据，获取到所有的学生和对应的班级名称
//        $sql = 'select *  from stu join grade on stu.gid = grade.id ';
        //有相同ID的时候ID会被后面的ID覆盖 所以这里不查询grade里面的ID。
        $sql = 'select s.*,g.gname from stu as s inner join grade as g on s.gid = g.id';
        $class = Stu::query($sql)->toArray();
//        echo '<pre>';
//        print_r($class);die;
        //获取学生数据在列表页显示
        $data = Stu::get()->toArray();
        return View::make()->with('stu',$data)->with('class',$class);
    }


    //查看学生资料
    public function look(){
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