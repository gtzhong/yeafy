<?php
/**
 * 跃飞科技版权所有 @2016
 * User: zhong
 * Date: 2016/7/21
 * Time: 13:53
 */

return array(
    'menu'=>array(
        '系统设置'=>array(
            '系统配置' =>array('Config','save'),
            '管理员列表'=>array('AdminMember','lst'),
        ),
        '广告管理'=>array(
            '广告列表'=>array('Ad','lst'),
            '广告位置'=>array('AdPosition','lst'),
        ),
        '文章管理'=>array(
            '文章分类'=>array('ArticleCat','lst'),
            '文章列表'=>array('Article','lst'),
        ),

    )
);