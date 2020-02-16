<?php

namespace App\Http\Controllers\Index;

use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\Province;

class IndexController extends Controller
{
    public function login(Request $request)
    {

        if($this->is_mobile()){
            return view('index/wap/login', [
//                'info' => $info
            ]);
        }else {
            $info = '姓名、证件号码必填，准考证号和报考单位至少填一项。';
            if (Session::exists('info')){
                $info = Session::get('info');
            }
            return view('index/index/login', [
                'info' => $info,
                'province_list' => Province::all(),
            ]);
        }

    }


    public function score(Request $request)
    {
        $xm = $request->post('xm', '');
        $zjhm = $request->post('zjhm', '');
        $ksbh = $request->post('ksbh', '');

        if (empty($xm) || empty($zjhm) || empty($ksbh)){
            Session::forget('info');
            return $this->returnInfo();exit();
//            return redirect('apply/cjcx');
        }
//        DB::enableQueryLog();#开启执行日志

        if (!Student::where(['name'=> $xm,'id_card'=>$zjhm])->exists()){
            return $this->returnInfo('不存在该考生 请验证输入是否正确！');exit();
//            return redirect('apply/cjcx')->with('info', '不存在该考生 请验证输入是否正确！');
        }
        $info = Student::where(['name'=> $xm,'id_card'=>$zjhm])->first();
        if (Str::substr($info->ticket,0,15) !== $ksbh){
            return $this->returnInfo('准考证号不存在 请验证输入是否正确！');exit();

//            return redirect('apply/cjcx')->with('info', '准考证号不存在 请验证输入是否正确！');
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

        $views = [
            'info' => $info,
            'total' => $total,
            'score' => $score,
            'zh_number' => ['一', '二', '三', '四', '五', '六', '七', '八', '九', '十', '十一', '十二', '十三', '十四', '十五', '十六', '十七', '十八', '十九', '二十']

        ];
        if($this->is_mobile()){
            return view('index/wap/score', $views);
        }else {
            return view('index/index/score',$views);
        }
    }

    public function errors()
    {

        return view('index/wap/error');
    }


    // 获取学校
    public function getSchool(Request $request)
    {
         $ssdm = $request->get('ssdm', 0);
         // 获取学校
         $schools = School::where('province_id', $ssdm)->get()->toArray();

         return ['dms'=> $schools];
    }

    public function getProvince()
    {
        // 获取省份
        $provinces = Province::all()->toarray();
        return ['dms'=>$provinces];
    }


    public function returnInfo($info=''){
        if ($this->is_mobile()){
            return redirect('apply/cjcx/error')->with('info', $info);
        }else {
            return redirect('apply/cjcx')->with('info',$info);
        }
    }

    public  function is_mobile()
    {

        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备

        if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {

            return true;

        }



        //此条摘自TPM智能切换模板引擎，适合TPM开发

        if (isset($_SERVER['HTTP_CLIENT']) && 'PhoneClient' == $_SERVER['HTTP_CLIENT']) {

            return true;

        }



        //如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息

        if (isset($_SERVER['HTTP_VIA']))

            //找不到为flase,否则为true

        {

            return stristr($_SERVER['HTTP_VIA'], 'wap') ? true : false;

        }



        //判断手机发送的客户端标志,兼容性有待提高

        if (isset($_SERVER['HTTP_USER_AGENT'])) {

            $clientkeywords = array(

                'nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp', 'sie-', 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu', 'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini', 'operamobi', 'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile',

            );

            //从HTTP_USER_AGENT中查找手机浏览器的关键字

            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {

                return true;

            }

        }

        //协议法，因为有可能不准确，放到最后判断

        if (isset($_SERVER['HTTP_ACCEPT'])) {

            // 如果只支持wml并且不支持html那一定是移动设备

            // 如果支持wml和html但是wml在html之前则是移动设备

            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
                return true;
            }
        }
        return false;
    }



    public function tjdx()
    {

        return view('index/tjdx/index');
    }

    public function tjlogin()
    {
        return view('index/tjdx/login');
    }

    public function tjscore()
    {
        return view('index/tjdx/score');
    }
}
