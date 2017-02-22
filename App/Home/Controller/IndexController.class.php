<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function _empty()
    {
        $this->redirect('Home/Index/index');
    }

    public function __construct()
    {
        parent::__construct();
        /*设置数据库配置*/
        $configModel = D('Admin/Config');
        $configModel->setConfig();
    }

    public function index()
    {
        //合作用户logo
        $smallLogo = array();
        $smallLogo[] = '10396736b83110d6-e.jpg';
        $smallLogo[] = '105818942b3e214c7-b.jpg';
        $smallLogo[] = '1059936c0d3bc61-8.jpg';
        $smallLogo[] = '1112243acd4a481-7.jpg';
        $smallLogo[] = '112492782f28493f-b.jpg';
        $smallLogo[] = '11324698fa8fb714-4.jpg';
        $smallLogo[] = '114111537927a32d-d.jpg';
        $smallLogo[] = '14221663126072d49-1.png';
        $smallLogo[] = '11537658468e5e25-2.jpg';
        $smallLogo[] = '116179159588ca64-0.jpg';
        $smallLogo[] = '1164748f1e48407-b.jpg';
        $smallLogo[] = '1172076627b8f447-7.jpg';
        $smallLogo[] = '11742604e36fd224-c.jpg';
        $smallLogo[] = '1175644829d58900-2.jpg';
        $smallLogo[] = '11872269afe7503-e.jpg';
        $smallLogo[] = '1181629308349695-6.jpg';
        $smallLogo[] = '1182594908902b45-3.jpg';
        $smallLogo[] = '1183630f2d27e70-d.jpg';
        $smallLogo[] = '1184579369874b05-8.jpg';
        $smallLogo[] = '11857768cd3bc558-9.jpg';
        $smallLogo[] = '1198325c24dcbee-0.jpg';
        $smallLogo[] = '11921535a2884e26-6.jpg';
        $smallLogo[] = '11932926a731626a-4.jpg';
        $smallLogo[] = '11945130b8b5e895-c.jpg';
        $smallLogo[] = '11101343083a9bf9-9.jpg';
        $smallLogo[] = '11108873cf413244-b.jpg';
        $smallLogo[] = '111018760580ae4c3-e.jpg';
        shuffle($smallLogo);
        $index = D('Index');
        $arr = $index->getCommonData();
        $this->assign('companyPhoto',$arr['companyPhoto']);
        $this->assign('menu',$arr['menu']);
        $this->assign('smallLogo',$smallLogo);
        //首页广告图
        $adModel = D('Admin/Ad');
        $ad = $adModel->getIndexSlideAd();
        $this->assign('ad', $ad);
        $this->display();
    }
    
    public function aboutUs()
    {
        $index = D('Index');
        $arr = $index->getCommonData();
        $this->assign('companyPhoto',$arr['companyPhoto']);
        $this->assign('menu',$arr['menu']);
        $this->display();
    }
}