<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-present http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
return [
    'fetch_upload_view'           => [
        "type"        => 2,//钩子类型(默认为应用钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => '获取上传界面', // 钩子名称
        "description" => "获取上传界面", //钩子描述
        "once"        => 1 // 是否只执行一次
    ],
    'user_admin_index_view'       => [
        "type"        => 2,//钩子类型(默认为应用钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => '用户管理本站用户列表界面', // 钩子名称
        "description" => "用户管理本站用户列表界面", //钩子描述
        "once"        => 1 // 是否只执行一次
    ],
    'user_admin_asset_index_view' => [
        "type"        => 2,//钩子类型(默认为应用钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => '资源管理列表界面', // 钩子名称
        "description" => "资源管理列表界面", //钩子描述
        "once"        => 1 // 是否只执行一次
    ],
    'user_admin_oauth_index_view' => [
        "type"        => 2,//钩子类型(默认为应用钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => '用户管理第三方用户列表界面', // 钩子名称
        "description" => "用户管理第三方用户列表界面", //钩子描述
        "once"        => 1 // 是否只执行一次
    ],
    'check_third_party_captcha'   => [
        "type"        => 2,//钩子类型(默认为应用钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => '第三方验证码检测', // 钩子名称
        "description" => "第三方验证码检测", //钩子描述
        "once"        => 1 // 是否只执行一次
    ],
];
