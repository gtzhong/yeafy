<?php
/**
 * 跃飞科技版权所有 @2017
 * User: 钟贵廷
 * Date: 2017/2/9
 * Time: 10:57
 */
namespace Home\Model;
use Think\Model;

class IndexModel
{
    /**
     * 获取公共部分数据
     * @return array
     */
    public function getCommonData()
    {
        $arr = array();
        //公司图片
        $companyPhoto = array();
        $companyPhoto[] = '104938348f6aa0e5c-4.jpg';
        $companyPhoto[] = '1049444596f1c9129-a.jpg';
        $companyPhoto[] = '104950141b88f5678-5.gif';
        $companyPhoto[] = '10495620032f52692-9.jpg';
        $arr['companyPhoto'] = $companyPhoto;

        //顶部菜单
        $menu = array();
        $menu[] = array('url'=>'Home/Index/index','text'=>'首页');
        $menu[] = array('url'=>'Home/Index/index#al','text'=>'案例');
        $menu[] = array('url'=>'Home/Index/aboutUs','text'=>'我们');
        $arr['menu'] = $menu;
        return $arr;
    }
}
