<?php
/**
 * 跃飞科技版权所有 @2016
 * User: 钟贵廷
 * Date: 2016/8/12
 * Time: 14:15
 */
namespace Admin\Controller;
use Think\Controller;
class AdminMemberController extends AdminController
{
    public function lst()
    {
       $adminMemberModel =  D('AdminMember');
       $adminMemberData =  $adminMemberModel->select();
       $this->assign('adminMemberData',$adminMemberData);
       $this->display();
    }

    /**
     * 添加管理员
     * 同时拥有角色
     */
    public function add()
    {
        if(IS_POST)
        {
            $model = D('AdminMember');
            // 接收并验证表单
            if($model->create())
            {
                //加密key
                $model->salt = $model->getSalt();
                //加密密码算法
                $model->password = $model->my_md5($model->password);
                // 插入数据库
                if(($admin_member_id = $model->add()) !== FALSE)
                {
                    $this->success('添加成功', U('lst'));
                    exit;
                }
                else
                {
                    if(APP_DEBUG)
                        echo 'SQL为：'.$model->getLastSql().' - ERROR:'.mysql_error();
                    else
                        $this->error('发生失败，请重试！');
                }
            }
            else
                $this->error($model->getError());  // 输出表单验证失败的原因
        }
        $this->display();
    }

    /**
     * 修改用户
     * @param $id
     */
    public function save($id)
    {
        if(IS_POST)
        {
            $model = D('AdminMember');
            if($model->create())
            {
                if($model->save() !== FALSE)
                {
                    $this->success('修改成功', U('lst'));
                    exit;
                }
                else
                {
                    if(APP_DEBUG)
                        echo 'SQL为：'.$model->getLastSql();
                    else
                        $this->error('发生失败，请重试！');
                }
            }
            else
                $this->error($model->getError());
        }
        $adminMemberModel = D('AdminMember');
        $adminMemberData =  $adminMemberModel->find($id);
        $this->assign('adminMemberData',$adminMemberData);
        $this->display();
    }

    /**
     * 删除管理员的同时，删除中间表的关联数据
     * admin管理员为超级管理员，不能删除
     * @param $id
     */
    public function delete($id)
    {
       $adminMemberModel = D('AdminMember');
       $admin_data =  $adminMemberModel->find($id);
        if(empty($admin_data))
        {
            $this->error('手贱，滚！');
        }
        else
        {
            if($admin_data['username'] == 'admin')
            {
                $this->error('admin超级管理员不能删');
            }
            else
            {
                $adminMemberModel->delete($id);
                $this->success('删除成功！');
            }
        }
    }

}
