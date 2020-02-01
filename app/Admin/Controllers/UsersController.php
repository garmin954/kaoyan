<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Post\ScoreDetail;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UsersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());
        $grid->column('id', __('Id'));
        $grid->column('name', __('账户'));
//        $grid->column('email', __('Email'));
//        $grid->column('email_verified_at', __('Email verified at'));
//        $grid->column('password', __('Password'));
//        $grid->column('remember_token', __('Remember token'));
        $grid->column('created_at', __('创建时间'));
//        $grid->column('updated_at', __('Updated at'));
        $grid->column('student.name', __('学生名称'));
        $grid->column('student.id_card', __('身份证件'));// id_card
        $grid->column('student.ticket', __('准考证号'));// ticket

//        $grid->actions(function ($actions) {
//            $actions->add(new ScoreDetail())    ;
//        });
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('账户'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
        $show->field('created_at', __('创建时间'));
        $show->field('updated_at', __('更新时间'));
        $show->field('student.name', __('学生名称'));
        $show->field('student.id_card', __('身份证件'));// id_card
        $show->field('student.ticket', __('准考证号'));// ticket
        // province
        // school
        $show->datetime('student.effect_at', __('查询有效时间'))->default(date('Y-m-d H:i:s'));// effect_at
        $show->textarea('student.score', __('课程成绩  (代码/课程名称/分数 课程按 enter 分割)'));// ticket

        return $show;
    }

    /**
     * Make a form builder.
     * 制作一个表单生成器。
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('name', __('账号'));
        $form->email('email', __('邮箱'));
        $form->datetime('email_verified_at', __('邮箱验证日期'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('密码'));
        $form->text('remember_token', __('记住token'));
        $form->text('student.name', __('学生名称'));
        $form->text('student.id_card', __('身份证件'));// id_card
        $form->text('student.ticket', __('准考证号'));// ticket
        // province
        // school
        $form->datetime('student.effect_at', __('查询有效时间'))->default(date('Y-m-d H:i:s'));// effect_at
        $form->textarea('student.score', __('课程成绩  (代码/课程名称/分数 课程按 enter 分割)'));// ticket

        return $form;
    }
}
