<?php
/**
 * 跃飞科技版权所有 @2016
 */

/**
 * 跃飞科技版权所有 @2016
 */

/**
 * User: 钟贵廷
 * Date: 2016/7/26
 * Time: 11:51
 */
namespace Admin\Controller;


use Think\Controller;

class IndexController extends  AdminController
{
    public function index()
    {
//        var_dump(session('privilege'));
        $this->display();
    }

    public function top()
    {
        $this->display();
    }

    public function menu()
    {
        $this->display();
    }

    public function main()
    {
        $this->display();
    }

    /**
     * 清空缓存
     */
    public function clearCache()
    {
        $dir = C('ROOT_PATH').'/App/Runtime/Cache';
        $this->clearPic($dir);
        $dir2 = C('ROOT_PATH').'/App/Runtime/Temp';
        $this->clearPic($dir2);
        $this->success('清理成功',U('Admin/Index/main'));
    }


    /**
     * 清理服务器上传的临时缓存图片
     */
    public function clearPics()
    {
        $dir = C('ROOT_PATH').'/assets/upload/tmp';
        $this->clearPic($dir);
        $this->success('清理服务器上传的临时缓存图片成功',U('Admin/Index/main'));
    }

    /**
     * 清除指定目录的所有文件
     * @param  [string] $dir 要清除的目录名
     * @return  void   没有返回值
     */
    private function clearPic($dir)
    {
        $dh=opendir($dir);
        while (!!$file = readdir($dh))
        {
            if($file!="." && $file!="..")
            {
                $fullpath=$dir."/".$file;
                if(!is_dir($fullpath))
                {
                    unlink($fullpath);   //删除不是目录的文件，如tmp/20141231142112.JPG
                }
                else
                {
                    $this->clearPic($fullpath);  //递归删除子目录下的文件，$fullpath=tmp/1
                    rmdir($fullpath);  //删除空目录
                }
            }
        }
        closedir($dh);
    }

}