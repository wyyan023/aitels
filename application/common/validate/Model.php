<?php
// +----------------------------------------------------------------------
// | RuiKeCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.ruikesoft.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Wayne <wayne@ruikesoft.com> <http://www.ruikesoft.com>
// +----------------------------------------------------------------------

namespace app\common\validate;

/**
* 设置模型
*/
class Model extends Base{

	protected $rule = array(
		'name'   => 'require|unique:model|/^[a-zA-Z]\w{0,39}$/',
		'title'   => 'require|length:1,30'
	);
	protected $message = array(
		'name'   => '模型名错误！',
		'name.require'   => '模型名必须！',
		'name.unique'   => '模型名已存在！',
		'title.require'   => '模型标题必须！',
		'title.length'   => '模型标题长度错误！',
	);
	protected $scene = array(
		'add'     => 'name,title',
		'edit'     => 'title',
	);

}