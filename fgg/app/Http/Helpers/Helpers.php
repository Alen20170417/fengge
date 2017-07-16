<?php

namespace App\Http\Helpers;

class Helpers{
    /**
     *存储实例对象的数组变量
     * @var array
     */
    private static $_instance=array();
    /**
     *存储数组数据的数组变量
     * @var array
     */
    private $_arr=array();
    /**
     *存储数字0-9的数组变量
     * @var type 
     */
    private $int_code=[0,1,2,3,4,5,6,7,8,9];
    /**
     *存储小写字母a-z的数组变量
     * @var type 
     */
    private $lower_char_code=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    /**
     *存储大写字母A-Z的数组变量
     * @var type 
     */
    private $upper_char_code=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        
     /**
     * 将数组对应的键值去除存入索引数组中，并返回该对象
     * @param array $arr
     * @return \App\Http\Helpers\Helpers
     */
     protected function getArrayKey($arr)
    {
        is_array($arr) or exit(false);
        //echo 123123;
        $temp_arr=array();
        foreach($arr as $k=>$v){
            $temp_arr[]=$k;
        }
        $this->_arr=array_merge($this->_arr,$temp_arr);
        return $this;
    }
    
    /**
     * 取得对象实例 支持调用类的静态方法
     * @param string $class 对象类名
     * @param string $method 类的静态方法名
     * @return object
     */
    static public function instance($class,$method='') {
        $identify   =   $class.$method;
        if(!isset(self::$_instance[$identify])) {
            if(class_exists($class)){
                $o = new $class();
                if(!empty($method) && method_exists($o,$method))
                    self::$_instance[$identify] = call_user_func_array(array(&$o, $method));
                else
                    self::$_instance[$identify] = $o;
            }
        }

        return self::$_instance[$identify];
    }
    
    /**
     * 将数据转换成数组并存入存储数组的变量中后，返回该对象
     * @param mixed $arr    //原始数组
     * @param string $method  //转换方法
     * @return array 返回经过数组转换的对象
     */
    public function toArray($mixed,string $method='getArrayKey')
    {
        $this->$method($mixed);
        
        return $this;
    }
    
    /**
     * 取得该对象存储数组数据的变量的值
     * @param array $arr
     * @param string $method
     * @return array 返回该对象存储数组数据的变量的值
     */
    public function getArray(Array $arr,string $method='getArrayKey')
    {
        $this->$method($arr);
        
        return $this->_arr;
    }
    
    /**
     *根据索引取对应的值
     * @param int $num
     * @return mixed 索引键值对应的值存在时返回对应的值，否则返回false
     */
    public function get($num,$format='key')
    {
        is_int($num) or exit(false);
        if(isset($this->_arr[$num]))
            return $this->_arr[$num];
        else
            return false;
    }
    
    /**
     * 取得该对象存储数组数据的变量的第一个值
     * @return mixed 返回该对象存储数组数据的变量的第一个值
     */
    public function first(){
        return $this->get(0);
    }
    
    /**
     * 获得随机码
     * @param type $num 随机码长度 
     * @param type $type    随机码类型1存数字2数字+小写3数字+小写+大写
     * @param type $repeat  是否重复1重复，否则不重复
     * @return type
     */
    public function getRandomCode($num=4,$type="1",$repeat=1){
        $num<0 && $num=4;
        
        switch($type){
            case "1":
                $code=$this->int_code;
            break;
            case "2":
                $code=array_merge($this->int_code,$this->lower_char_code);
            break;
            case "3":
                $code=array_merge($this->int_code,$this->lower_char_code,$this->upper_char_code);
            break;
        }
        
        $randCode='';
        $len=count($code);
        $num=$num>$len?$len:$num;
        for($i=0;$i<$num;$i++)
        {
            if($repeat==1){
                $randCode.=array_rand($code);
            }else{
                $len=count($code);
                $key=rand(0,$len-1);    //取得随机的键值
                $randCode.=$code[$key];    //连接到字符串尾部
                unset($code[$key]);
                //myShow($code);
                $code=array_values($code);  //重置数组
            }
        }

        return $randCode;
    }
    
    /**
     * 获得当前用户的ip
     * @return type
     */
    public function getIp(){
        $ip=$_SERVER['REMOTE_ADDR'];
        return $ip;
    }
    
    /**
     * 跳转页面，并弹出js提示信息 
     * @param string $url 页面地址
     * @param string $mess  提示信息
     */
    public function jump($url,$mess){
        $goUrl=$url!='-1'?'window.location.href="'.$url.'"':'history.go(-1)';
        $jump='<script>alert("'.$mess.'");'.$goUrl.';</script>';
        exit($jump);
    }
}
