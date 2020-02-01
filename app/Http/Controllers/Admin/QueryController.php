<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Encore\Admin\Grid\Filter\Group;
use Encore\Admin\Layout\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QueryController extends Controller
{
    //

//    public function users()
//    {
//
//        return view(    'admin/query/user', ['name' => 'Victoria']);
//    }
//
//    public function user(Content $content)
//    {
//        return $content
//            ->header('用户列表')
//            ->body($this->grid());
//    }
//
//    protected function grid()
//    {
//        $grid = new Group(new User);
//
//        $grid->id('id');
//        $grid->avatar('头像')->image(config('app.url'), 50, 50);
//        $grid->name('姓名');
//        $grid->phone('电话');
//        $grid->email('邮箱');
//        $grid->created_at('注册时间');
//        $grid->last_actived_at('最后活跃时间');
//
//        return $grid;
//    }
}
