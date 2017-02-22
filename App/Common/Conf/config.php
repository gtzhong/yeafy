<?php
$website = http_type().$_SERVER['SERVER_NAME'];
return array(
    'DB_TYPE' => 'mysql',
    'DB_HOST' => '127.0.0.1',
    'DB_NAME' => 'yeafy',
    'DB_USER' => 'root',
    'DB_PWD' =>'',
    'DB_PORT' =>'3306',
    'DB_PREFIX' => 'tp_',

    'TMPL_TEMPLATE_SUFFIX'=>'.phtml',
    //让页面显示追踪日志信息
    'SHOW_PAGE_TRACE'   => true,
    //不区分大小写
    'URL_CASE_INSENSITIVE' => false,

    //前台样式配置
    'f-css'=> $website.'/assets/home/css',
    'f-js'=> $website. '/assets/home/js',
    'f-img'=>$website. '/assets/home/images',
    'URL_MODEL'             =>  1,
    'jq-ui' => $website.'/assets/jquery-ui', //jquery-ui插件

    'css'=> $website.'/assets/admin/styles', //配置后台css
    'js'=> $website. '/assets/admin/js', //配置后台js
    'img'=>$website. '/assets/admin/images', //配置后台图片
    'shopName' =>'丹宏昊天 管理中心',

    //成功，失败以及异常模板
    'TMPL_ACTION_SUCCESS' => './assets/template/message.php',
    'TMPL_ACTION_ERROR' => './assets/template/message.php',
    'TMPL_EXCEPTION_FILE' => './assets/template/exception.php',

);