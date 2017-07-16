<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Helpers\Message;

class RegisterController extends Controller{
    /**
     * 注册页面
     * @return view 
     */
    public function index(){
        //var_dump(User::get()->where("username",'=',"allen0612")->where("id",'=',"1")->toArray());
        return view("register",['tpl'=>'注册']);
    }
    
    /**
     * 用户注册
     * @param \Illuminate\Http\Request $request
     */
    public function reg(Request $request){
        $id=User::model()->addUser($request->input());
        if($id){
            $email=$request->input('email');
            $body='非常感谢您到我们的平台注册账号，为保证账号安全,我们给您发送了一封进行账号激活的邮件，请点击以下网址进行账号激活：<br/>'
                    .route('verifyreg',['id'=>$id]).'?verfiy='.md5('XZSDFS123SDF'.$id);
            $mailConf=[
                 'to'=>$email,
                 'body'=>$body,
                 'subject'=>'账号激活'
            ];
            if(($msg=Message::mailsend($mailConf))===true)
            {
                $mess='恭喜您,账号注册成功，我们已往您的邮箱中发送一封账号激活邮件，请激活账号后再进行登陆';
            }else{
                $mess='恭喜您,账号注册成功,验证邮件目前正在发送中...';
            }
            helpers()->jump(route('index'),$mess);
        }else{
            //helpers()->jump(-1,'注册失败，发生一点小故障，请稍后再尝试注册');
            return response()->json(User::model()->error);
        }
    }
    
    /**
     * 注册账号激活,并跳转页面
     * @param \Illuminate\Http\Request $request
     * @param type $id
     */
    public function verify(Request $request,$id){
        $verfiy=$request->input('verfiy');
        if(md5('XZSDFS123SDF'.$id)!=$verfiy){
            exit('验证信息错误');
        }
        $count=User::model()->where('id',$id)->where('status',1)->count();
        if($count){
            helpers()->jump(route("index"),'您已经激活过该账号');
        }
        
        $res=User::model()->where('id',$id)->update(['status'=>1]);
        if($res){
            helpers()->jump(route("index"),'账号激活成功');
        }else{
            helpers()->jump(-1,'账号激活失败');
        }
    }
    
    public function checkRegForm(Request $request){
        //myShow($request->input());
        $flag=User::model()->validateRegForm($request->input());
        if($flag===false){
            return response()->json(User::model()->error);
        }else{
            return response()->json(['m'=>'success','mess'=>'']);
        }
    }
}

