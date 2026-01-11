<?php

namespace App\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CpuModelMysql extends Model
{
    protected $connection = 'mysql';   // DB 연결 그룹 (config/database.php)
    protected $table      = 'cpu';     // 테이블명
    protected $primaryKey = 'id';      // PK (DB 구조에 맞게 수정)

    public $timestamps = false;        // created_at, updated_at 없으면 false

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
                 ->orderBy('choice_cpu', 'desc')
                 ->limit(5)
                 ->get()
                 ->toArray();
    }
}
