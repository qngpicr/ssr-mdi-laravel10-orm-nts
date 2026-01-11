<?php

namespace App\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class CpuModelMysql extends Model
{
    protected $connection = 'mysql';   // DB 연결 그룹
    protected $table      = 'cpu';     // 테이블명
    protected $primaryKey = 'id';      // PK
    public $timestamps    = false;     // created_at, updated_at 없으면 false

    // 전체 개수 (ORM 방식)
    public function scopeCountAll($query): int
    {
        return $query->count();
    }

    // 인기 CPU 가져오기 (ORM 방식)
    public function scopeHotItems($query)
    {
        return $query->orderBy('choice_cpu', 'desc')->limit(5);
    }
}
