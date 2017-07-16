#@description 峰格格网数据库设计
#@author allen
#@modify 2017/06/18
#==============================================【峰格格网数据库设计】=============================

//用户信息表
drop table if exists fgg_user; 
create table fgg_user(
id int(9) not null primary key AUTO_INCREMENT comment 'pk',
username varchar(45) not null unique comment '用户名',
truename varchar(60) not null comment '真实姓名',
password varchar(60) not null comment '密码',
email varchar(60) not null unique comment '邮箱',
phone char(11) not null unique comment '手机',
area varchar(60) not null unique comment '所在地',
lastlogip varchar(60) not null comment '最后一次登陆ip',
lastlogtime varchar(60) not null comment '最后一次登陆时间',
lognum varchar(60) not null comment '登陆次数',
status tinyint(1) not null comment '审核情况：0待审1通过2未过',
key(status)
)engine innodb charset=utf8 comment '用户信息表';
