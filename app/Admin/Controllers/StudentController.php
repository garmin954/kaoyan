<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Post\Replicate;
use App\Admin\Actions\Post\ScoreDetail;
use App\Admin\Extensions\Tools\StudentGender;
use App\Models\Student;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StudentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Student';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Student());
        $grid->column('name', __('姓名'));
        $grid->column('id_card', __('身份证'));
        $grid->column('ticket', __('准考证号'));
        $grid->column('effect_at', __('有效查询时间'));
        $grid->column('user.name', __('账户'));

//        $grid->tools(function ($tools) {
//            $tools->append(new StudentGender());
//        });

        $grid->actions(function ($actions) {
            $actions->add(new ScoreDetail());
        });
        // 禁用创建按钮
        $grid->disableCreateButton();
        // 禁用分页条
//        $grid->disablePagination();
        // 禁用查询过滤器
        $grid->disableFilter();
        // 禁用导出数据按钮
        $grid->disableExport();
        // 禁用行操作列
//        $grid->disableActions();

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
        $show = new Show(Student::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
//    protected function form()
//    {
//        $form = new Form(new Student());
//
//
//
//        return $form;
//    }
}
