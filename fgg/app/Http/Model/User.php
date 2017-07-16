<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Validator;

class User extends Model{
    /**
     *该模型的表名
     * @var string
     */
    protected $table='fgg_user';
    /**
     *插入字段白名单
     * @var array 
     */
    protected $fillable=['username','truename','password','email','phone','area','lastlogip','lastlogtime','lognum','status'];
    /**
     *禁用时间撮
     * @var bool
     */
    public    $timestamps=false;
    /**
     *登陆验证信息数组
     * @var array
     */
    protected $messages=[
             'required'=>"请输入:attribute",
             'unique'=>"该:attribute已经存在",
             'ismobile'=>"请输入长度为11位的正确手机号 ",
             'min'=>":attribute不得少于:min位",
             'email'=>":attribute格式输入错误",
             'phone'=>":attribute格式输入错误",
             'checkverify'=>":attribute不正确",
             'checktime'=>":attribute已经失效",
             'same'=>'两次密码输入必须一致'
    ];
    /**
     *登陆验证规则数组
     * @var array 
     */
    protected $log_rules=[
            'username'=>'required|min:8|max:255',
            'password'=>'required|min:6|max:18',
            'vcode'=>'required|checkverify|checktime'
    ];
    
    /**
     *注册验证规则数组
     * @var array 
     */
    protected $reg_rules=[
            'username'=>'required|min:6|max:255',
            'password'=>'required|min:6|max:18',
            'password1'=>'same:password',
            'email'=>'required|email',
            'phone'=>'required|ismobile',
    ];
    
    /**
     *错误信息存储变量
     * @var type 
     */
    public $error;
    /**
     *模型存储变量
     * @var type 
     */
    public static $model;
    /**
     *操作检测数组
     * @var type 
     */
    public static $actionCheck=['addUser'=>false];
    
    /**
     * 单例化模型
     * @return object
     */
    public static function model(){
        if(!self::$model){
            self::$model=new User();
        }
        return self::$model;
    }
    
    public function getUser()
    {
        return $this->hasOne('App\Http\Model\UserRole','fgg_user.id','fgg_user_role.user_id');
    }
    
    /**
     * 表单信息验证
     * @param type $data
     * @param type $rules
     * @param type $mess
     * @return boolean
     */
    function validate($data,$rules,$mess){
        $v=\Validator::make($data,$rules,$mess);
        if ($v->fails()) {
           $message=$v->messages()->toArray();
           //myShow($message);
           $m=Helpers()->toArray($message)->first();
           $mess=$v->messages()->first();
           $this->error=['m'=>$m,'mess'=>$mess];
           //myShow($this->error);
           return false;
        }
        
        return true;
    }
    
    /**
     * 检测登陆，成功返回用户的个人信息，错误返回false,并将错误信息存入错误信息变量中
     * @param array $input
     * @return boolean or Array
     */
    public function logCheck($input){
        isset($input) or exit(false);

        if(!$this->validate($input, $this->log_rules, $this->messages)){
            return false;
        }

        $username=$input['username'];
        $password=$input['password'];
        if($username && $password)
        {
            $user=self::where('username',$username)->get()->toArray();
            $count=1;
            //var_dump($user);
            if(empty($user)){
                $m='username';
                $mess='非法操作';
            }elseif($count>=3){
                $m='password';
                $mess='您已经连续3次输入错误密码,请休息下再登陆吧';
            }elseif($user[0]['password']!=sha1(md5($password))){
                $m='password';
                $mess='密码输入错误';
            }elseif($user[0]['status']!=1){
                $m='username';
                $mess='您的账号暂未通过审核，请等待审核通过后再进行登陆';
            }
            
            if(isset($m) && isset($mess))
                $this->error=['m'=>$m,'mess'=>$mess];
            else
                return $user[0];
        }
        //myShow($user);
        return false;
    }
    
    /**
     * 添加数据
     * @param type $data  字段信息数组
     * @return int 返回插入的id,失败返回错误信息
     */
    public function addUser($data){
      if(!self::$actionCheck['addUser']){
          $this->validateRegForm($data);
      }
      
      $data=array_merge($data,[
            'password'=>sha1(md5($data['password'])),
            'lastlogip'=>helpers()->getIp(),
            'lastlogtime'=>date("Y-m-d H:i:s"),
            'lognum'=>1,
            'status'=>0,
        ]);
      return $this->create($data)->id;
    }
    
    /**
     * 验证注册表单
     * @param array $data
     * @return boolean
     */
    public function validateRegForm($data){
        if(!$this->validate($data, $this->reg_rules, $this->messages)){
          self::$actionCheck['addUser']=false;
          return false;
        }else{
          self::$actionCheck['addUser']=true;
          return true;
        }
    }
}
