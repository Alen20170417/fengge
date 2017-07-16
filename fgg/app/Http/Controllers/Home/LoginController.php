<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use App\Http\Model\User;
use App\Http\Helpers\Message;
//use Illuminate\Validation\Validator;
//use App\Http\Helpers\Helpers;
//use App\Http\Helpers\FormMessage;

class LoginController extends Controller{
    /**
     * 登陆页面
     * @param \Illuminate\Http\Request $Request
     * @return type
     */
    public function index(Request $Request)
    {
        if($Request->session()->has("userid"))
        {
            return redirect()->route("index");
        }else{
            return view("login");
        }
    }
    
    /**
     * 登出页面
     * @param \App\Http\Controllers\Home\request $request
     * @return type 页面跳转至前台主页
     */
    public function logout(request $request){
        $request->session()->pull('userid','default');
        return redirect()->route('index');
    }
    /**
     * 用户登录处理后台
     * @param \Illuminate\Http\Request $Request
     * @return json 返回json格式信息
     */
    public function log(Request $Request){
        $user=User::model();
        if(!($userInfo=$user->logCheck($Request->input()))){
            return response()->json($user->error);
        }else{
            session(['userid'=>$userInfo['id'],'username'=>$userInfo['username']]);
            return response()->json(['m'=>'success','mess'=>'登陆成功']);
        }
    }
    
    //发送验证码到用户的邮箱
    public function mailsendVcode(request $request){
        $userInfo=User::where("username",$request->input('username'))->get(['email'])->toArray();
       
        if($userInfo)
        {
            $email=$userInfo[0]['email'];
            $randCode=helpers()->getRandomCode(4,3,0);
            $body='你本次的登陆验证码：'.$randCode.',有效期为10分钟，请尽快进行登陆验证。';
            $mailConf=[
                 'to'=>$email,
                 'body'=>$body,
                 'subject'=>'登陆验证码'
            ];
            if($msg=Message::mailsend($mailConf)===true){
                session(['logVcode'=>[$randCode,time()+600]]);       //存入session，已便进行表单验证
                return response()->json(['m'=>'vcode','mess'=>'验证码已成功发送到您的邮箱','res'=>'success']);
            }else{
                return response()->json(['m'=>'vcode','mess'=>'发生了一些错误，请稍后再进行尝试','res'=>'fail','errormsg'=>$msg]);
            }
        }else{
            return response()->json(['m'=>'username','mess'=>'请仔细检查您的账号是否输入错误','res'=>'fail']);
        }
    }
}

