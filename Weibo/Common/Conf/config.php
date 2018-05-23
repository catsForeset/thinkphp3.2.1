<?php
return array(
	//'配置项'=>'配置值'
    'MODULE_DENY_LIST'=>array('Common','Runtime'),//禁止访问模块Common,Runtime,这两个默认不能访问。去掉后允许访问。注释掉恢复默认设置。
    'MODULE_ALLOW_LIST'=>array('Admin','Weibo'),//允许访问。去掉后拒绝访问。注释掉恢复默认设置。
//    'DEFAULT_MODULE'=>'Admin',//默认加载模块，进入项目thinkphp3.2.1直接访问此模块
//    'MULTI_MODULE'=>false,//只允许单模块
);