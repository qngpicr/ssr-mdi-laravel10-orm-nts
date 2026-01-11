<?php

namespace App\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DeviceModelMysql extends Model
{
    protected $connection = 'mysql';   // DB 연결 그룹
    protected $table      = 'device';  // 테이블명
    protected $primaryKey = 'id';

    public $timestamps = false;

    public function countAll(): int
    {
        $row = DB::connection($this->connection)
                 ->table($this->table)
                 ->selectRaw('COUNT(*) AS cnt')
                 ->first();

        return (int) $row->cnt;
    }

    public function getHotItems(): array
    {
        return DB::connection($this->connection)
                 ->table($this->table)
                 ->orderBy('choice_device', 'desc')
                 ->limit(5)
                 ->get()
                 ->toArray();
    }
}
