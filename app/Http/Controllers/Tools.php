<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Tools extends Controller
{
    //

    public function jsonToSql(Request $request)
    {
        $result = '';
        if ($request->method() == 'POST'){

            $table = $request->post('table', 'table_name');
            $field = explode('=', trim($request->post('field', '')));

            $file = $request->file('file');
            $filePath = $file->getRealPath();

            $originalData = file_get_contents($filePath);
            $data = json_decode($originalData, true)['dms'];

            // 数组转insert

            foreach ($data as $smallArr){
//                implode(',', $smallArr).",{$field[1]}
                $value = "";

                foreach ($smallArr as $k=>&$val){
                    $val = is_numeric($val)?:"'{$val}'";
                    $val = $smallArr[$k]?:'null';

                }
                $value = implode(',', $smallArr).",{$field[1]}";
                $fields = implode(',', array_keys($smallArr)).",{$field[0]}";
                $result .= "INSERT INTO {$table} ({$fields})VALUES({$value});<br>";
            }


        }
        return view('tools/jsonToSql', [
            'result' => $result
        ]);
    }
}
