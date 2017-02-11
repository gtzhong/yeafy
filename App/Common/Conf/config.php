<?php
$website = http_type().$_SERVER['SERVER_NAME'];
return array(
    'TMPL_TEMPLATE_SUFFIX'=>'.phtml',
    //让页面显示追踪日志信息
    'SHOW_PAGE_TRACE'   => true,
    //不区分大小写
    'URL_CASE_INSENSITIVE' => false,

    //前台样式配置
    'f-css'=> $website.'/assets/home/css',
    'f-js'=> $website. '/assets/home/js',
    'f-img'=>$website. '/assets/home/images',
    'URL_MODEL'             =>  0,

);