<?php

namespace App\Http\Controllers;

use App\Models\Mysql\CpuModelMysql;
use App\Models\Mysql\DeviceModelMysql;

class HomeController extends Controller
{
    public function index()
    {
        // 데이터 준비 (순수 ORM)
        $data['totalCpuCount']    = CpuModelMysql::count();
        $data['totalDeviceCount'] = DeviceModelMysql::count();

        $data['hotCpus']    = CpuModelMysql::orderBy('choice_cpu', 'desc')->limit(5)->get();
        $data['hotDevices'] = DeviceModelMysql::orderBy('choice_device', 'desc')->limit(5)->get();

        // 뷰 로드 (SSR index.blade.php)
        return view('index', $data);
    }
}
