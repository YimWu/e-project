<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
    	echo "您好： " . cookie('user_name') . ', <a href="' . url('login/loginout') . '">退出</a>';
    }   
}
// <?php 
// namespace app\index\controller;

// use think\controller;
// use think\Db;
// use think\Url;
// class Index
// {
    
//     public function index()
//     {
//         return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
//     }
//     public function hello() {
//         //插入
//         //$result = Db::execute('insert into tp_data(id,name,status) values (1,"1111",1)');
//         //dump($result);
//         //更新
//         //$result = Db::execute('update tp_data set name = "framework" where id = 1');
//         //dump($result);
//         //查询
//         //$result = Db::query('select * from tp_data where id = 1');
//         //print_r($result);
//         //删除
//         //$result = Db::execute('delete from tp_data where id = 1');
//         //dump($result);
//         //显示数据库列表
//         //$result = Db::query('show tables from mysql1');
//         //dump($result);
//         //$result = Db::query('TRUNCATE table tp_data');
//         //dump($result);
//         $result =Db::table('tp_data')->insert(['id' => 6,'name' => 't','status' => 1]);
//         dump($result);
        
        
        
//     }
    
// }
// ?>