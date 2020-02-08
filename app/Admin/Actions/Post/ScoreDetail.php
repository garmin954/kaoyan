<?php

namespace App\Admin\Actions\Post;

use App\Models\Student;
use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class ScoreDetail extends RowAction
{
    public $name = '成绩详情';

    public function handle(Model $model, $request)
    {
        $student = Student::findOrFail($this->row->id);
        $student->name = $request->get('name');
        $student->apply_code = $request->get('apply_code');
        $student->id_card = $request->get('id_card');
        $student->ticket = $request->get('ticket');
        $student->effect_at = $request->get('effect_at');
        $student->score = $request->get('score');
        $student->memo = $request->get('memo');
        $student->save();

        return $this->response()->success('保存成功')->refresh();
    }

    public function form()
    {

        $student = Student::findOrFail($this->row->id);
        $this->text('name', '学生姓名')->value($student->name)->rules('required');
        $this->text('apply_code', '报名号')->value($student->apply_code);
        $this->text('id_card', '身份证号')->value($student->id_card)->rules('required');
        $this->text('ticket', '准考证号')->value($student->ticket)->rules('required');

        $this->datetime('effect_at', '有效时间')->value($student->effect_at);
//        $this->checkbox('type', '课程')->options($type);
        $this->textarea('score', '课程成绩  (代码/课程名称/分数 课程按 enter 分割) ')->value($student->score);
        $this->textarea('memo', '备注')->value($student->memo);
    }
}
