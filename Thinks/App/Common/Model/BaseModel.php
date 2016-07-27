<?php

/**
 * class：BaseModel
 * mark: 公共模块模型基类, 继承自Think\Model
 *
 */

namespace Common\Model;

use Think\Model;

class BaseModel extends Model
{
    /**
     * 架构函数
     * 取得DB类的实例对象 字段检查
     * @access public
     * @param string $name 模型名称
     * @param string $tablePrefix 表前缀
     * @param mixed $connection 数据库连接信息
     */
    public function __construct($name = '', $tablePrefix = '', $connection = '')
    {
        parent::__construct($name, $tablePrefix, $connection);
    }

    // 回调方法 初始化模型
    protected function _initialize()
    {
        parent::_initialize();
    }

    // 写入数据前的回调方法 包括新增和更新
    protected function _before_write(&$data)
    {
        parent::_before_write($data);
    }

    // 插入数据前的回调方法
    protected function _before_insert(&$data, $options)
    {
        parent::_before_insert($data, $options);
    }

    // 插入成功后的回调方法
    protected function _after_insert($data, $options)
    {
        parent::_after_insert($data, $options);
    }

    // 更新数据前的回调方法
    protected function _before_update(&$data, $options)
    {
        parent::_before_update($data, $options);
    }

    // 更新成功后的回调方法
    protected function _after_update($data, $options)
    {
        parent::_after_update($data, $options);
    }

    // 删除数据前的回调方法
    protected function _before_delete($options)
    {
        parent::_before_delete($options);
    }

    // 删除成功后的回调方法
    protected function _after_delete($data, $options)
    {
        parent::_after_delete($data, $options);
    }

    // 查询成功后的回调方法
    protected function _after_select(&$resultSet, $options)
    {
        parent::_after_select($resultSet, $options);
    }

    // 查询成功的回调方法
    protected function _after_find(&$result, $options)
    {
        parent::_after_find($result, $options);
    }

}