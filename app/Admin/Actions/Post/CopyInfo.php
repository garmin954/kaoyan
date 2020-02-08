<?php

namespace App\Admin\Actions\Post;

use App\Models\Student;
use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class CopyInfo extends RowAction
{
    public $name = '复制';

    public function handle(Model $model)
    {
        // $model ...

        return $this->response()->success('复制成功')->refresh();
    }

    public function form()
    {
        $info = Student::findOrFail($this->row->id);

        $text = <<<EOT
http://yz.ddnsk.com/apply/cjcx/
姓名： {$info->name}
身份证： {$info->id_card}
准考证： {$info->ticket}

报考单位不用选
(模拟‘yz网’成绩查询，切勿用于不正途径，损害‘yz网’利益)
EOT;
        $this->textarea('text', '内容')->value($text);
    }
}
