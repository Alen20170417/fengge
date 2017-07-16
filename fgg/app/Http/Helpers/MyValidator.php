<?php

namespace App\Http\Helpers;

use Illuminate\Validation\Validator;

/*-------------------------------------------------
 * 继承自Validator的自定义扩展验证类 
 * ------------------------------------------------
 * 在原有的基础上增加了很多通用的验证规则
 */
class MyValidator extends Validator{
    
    static function validateIsmobile($attribute, $value, $parameters){
        return strlen((string)$value) == 11;
    }
    
    static function validateCheckverify($attribute, $value, $parameters){
        return $value==session('logVcode')[0];
    }
   
    static function validateChecktime($attribute, $value, $parameters){
        return time()<session('logVcode')[1];
    }
}
