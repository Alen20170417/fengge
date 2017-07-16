<?php

namespace App\Http\Helpers;

//use App\Http\Helpers\PHPMailer;

class Message {
    /**
     *邮件发送配置参数
     * @var array 
     */
    protected static $mailConf=[
        'host'=>'smtp.qq.com',
        'smtpauth'=>true,  
        'charset'=>'utf-8',
        'username'=>'398334077@qq.com',
        'password'=>'ibxkufimsvupbgeb',
        'from'=>'398334077@qq.com',
        'fromname'=>'峰格格',
        'subject'=>'test',
        'body'=>'this is a test email',
        'ishtml'=>true,
        'to'=>'2814486334@qq.com',
        'toname'=>'allen'
    ];
    
    /**
     * 打印出text格式数据，并退出
     * @param mixed $text 
     */
    public static function json($info)
    {
        if(!is_array($info)) $info=['info'=>$info];
        exit(json_encode($info));
    }
    
    /**
     * 打印出text格式数据，并退出
     * @param mixed $text 
     */
    public static function text($text)
    {
        if(!is_string($text) || !is_int($text)) $info='';
        exit($info);
    }
    
    /**
     * PHPmailer邮件发送
     * @param type $mailConf
     * @return type  成功返回true，失败返回错误信息
     */
    public static function mailsend($mailConf=array()){
        !is_array($mailConf) && $mailConf=array($mailConf);
        
        $mailConf=array_merge(self::$mailConf,$mailConf);
		//myShow($mailConf);
        $mail=new PHPMailer();
        $mail->IsSMTP();                         //设定SMTP方式发信
        $mail->SMTPAuth =$mailConf['smtpauth'];             //设定SMTP需要验证
        $mail->Host =$mailConf['host'];              //设定SMTP服务器地址
        $mail->SMTPSecure = "ssl"; // SSL 加密模式
        $mail->Port = 465;                        //QQ邮箱端口号
        $mail->Charset = $mailConf['charset'];               //邮件的编码方式

        $mail->Username =  $mailConf['username'];    //登录的邮箱账号
        $mail->Password = $mailConf['password'];    //登录的密码
        $mail->From = $mailConf['from'];                     //发件人邮箱
        $mail->FromName=$mailConf['fromname'];                 //发件人姓名
        $mail->Subject = $mailConf['subject'];               //邮件主题
        $mail->Body = $mailConf['body'];                //邮件内容
        $mail->IsHTML($mailConf['ishtml']);                     //是否以html的格式发送
        $mail->AddAddress($mailConf['to']);                  //收件人
 
        if($mail->Send()){
            $msg=true;
        }else{
            $msg=$mail->ErrorInfo;
        }
       
        return $msg;
    }
}
