<?php
/**
 * 跃飞科技版权所有 @2016
 */

namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller
{
    public function index()
    {
       $this->redirect('Home/Index/index');
    }
    

}