<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class RegController extends BaseController
{
        public function login1(Request $Request,$id)
        {
            //$name=$Request->input('user');
            var_dump($Request->all());
            if(!empty($Request->all()))
            {
                if(!$Request->hasFile('upload'))
                {
                   echo '<font color="red">请上传文件</font>';
                   redirect()->route('basic1',["id"=>1]);
                }else{
                    $path=$Request->upload->storeAs('image','img'.time().'.jpg');
                    $info=$path?'<font color="green">文件上传成功</font>':'<font color="red">文件上传失败</font>';
                    echo $path;
                    echo $info;
                }
            }
            
            $token=csrf_token();
            $html=<<<EOF
             <form name="form1" method="post" action="" enctype="multipart/form-data" >
                    用户名：<input type="text" name="user" value="" /><br/>
                    密码：<input type="password" name="password" value="" /><br/>
                   上传：<input type="file" name="upload" /><br/>
                    <input type="hidden" name="_token"         value="$token"/>
                    <input type="submit" value="提交" />
             </form>
EOF;
            echo $html;
            
        }
}