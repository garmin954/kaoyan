<?php

namespace App\Http\Controllers\Index;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function login(Request $request)
    {

        $info = '姓名、证件号码必填，准考证号和报考单位至少填一项。';
        if (Session::exists('info')){
            $info = Session::get('info');
        }
        return view('index/index/login', [
            'info' => $info
        ]);
    }


    public function score(Request $request)
    {
        $xm = $request->post('xm', '');
        $zjhm = $request->post('zjhm', '');
        $ksbh = $request->post('ksbh', '');

        if (empty($xm) || empty($zjhm) || empty($ksbh)){
            return redirect('apply/cjcx');
            Session::forget('info');
        }
//        DB::enableQueryLog();#开启执行日志
        $info = Student::where(['name'=> $xm,'id_card'=>$zjhm])->first();

        if (empty($info)){
            return redirect('apply/cjcx')->with('info', '不存在该考生 请验证输入是否正确！');
        }

        if (Str::substr($info->ticket,0,15) !== $ksbh){
            return redirect('apply/cjcx')->with('info', '准考证号不存在 请验证输入是否正确！');
        }
//        dump(DB::getQueryLog());   //获取查询语句、参数和执行时间
        $scoreArr = explode("\r\n", $info->score);
        $score = [];
        $total = 0;
        if (!empty($scoreArr)){
            foreach ($scoreArr as $value){
                $detail = explode('/', $value);
                $score[] = array('code' => $detail[0], 'name' => $detail[1], 'score' => $detail[2]);
                $total += intval($detail[2]);
            }
        }

        return view('index/index/score', [
            'info' => $info,
            'total' => $total,
            'score' => $score,
            'zh_number' => [ '一', '二', '三', '四', '五', '六', '七', '八', '九', '十', '十一', '十二', '十三', '十四', '十五', '十六', '十七', '十八', '十九', '二十']
        ]);
    }
}
