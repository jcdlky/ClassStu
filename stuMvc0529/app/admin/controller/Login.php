<?php
namespace app\admin\controller;

use core\Controller;
use core\view\View;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use system\model\User;

class Login extends Controller {




     //加载登录模板方法

    public function loginForm(){
        //判断如果是post请求,就处理登录
        if ($_POST){
            $post = $_POST;
//  print_r($_SESSION['username']);die;


            //判断验证码是否输入正确
            if ($post['code'] != $_SESSION['code']){
                return $this->redirect()->message('验证码错误');
            }


            //判断数据库中是否存在当前输入的用户名和密码的数据,如果存在,继续往下执行,如果不存在,提示并返回
            $userInfo = User::where('username = "'.$post['username'].'" and password = "' . md5($post['password']) . '"')->get()->toArray();
//            print_r($userInfo);die;
            if (empty($userInfo)){
                return $this->redirect()->message('用户名或密码错误');
            }


            //判断用户是否勾选记住我,如果勾选了,就存入autologin字段
            if (isset($post['autologin'])){
                setcookie(session_name(),session_id(),time() + 7*24*3600,'/');
            }
            //登录成功,将用户的用户名和数据库中的用户id存入session中
            $_SESSION['username'] = $post['username'];
            $_SESSION['uid'] = $userInfo[0]['id'];
            //提示登录成功,并跳转去指定的后台首页
            return $this->redirect('index.php?s=admin/entry/index')->message('登录成功');

        }
        return View::make();
    }


    public function logout(){
        //清除session内容
        session_unset();
        session_destroy();
        //跳转去后台登录
        return $this->redirect('index.php?s=admin/login/loginForm')->message('退出成功');
    }

    //生成验证码
    public function code(){
        $phraseBuilder = new PhraseBuilder(4,'1234567890');
        $builder = new CaptchaBuilder(null, $phraseBuilder);
        $builder->build();
        header('Content-type: image/jpeg');
        $builder->output();
        //将生成的验证码存入session
        $_SESSION['code'] = $builder->getPhrase();
    }

}









?>