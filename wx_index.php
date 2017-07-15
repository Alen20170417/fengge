<?php
define("TOKEN",'TEST123123');

$wx=new myWx();
//进行验证,完成第一次配置后，以后无需进行该步骤
$wx->verify();
//进行接口调用
$wx->getInfo();

class myWx{

	public function getInfo(){
		//实现根据请求信息调用接口
	}

	public function verify(){
		//进行密钥的认证
	}
}
