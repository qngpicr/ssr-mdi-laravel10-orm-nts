<?php

namespace App\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class DeviceModelMysql extends Model
{
    protected $connection = 'mysql';
    protected $table      = 'device';
    protected $primaryKey = 'id';
    public $timestamps    = false;

    // 전체 개수 (ORM 방식)
    public function scopeCountAll($query): int
    {
        return $query->count();
    }

    // 인기 Device 가져오기 (ORM 방식)
    public function scopeHotItems($query)
    {
        return $query->orderBy('choice_device', 'desc')->limit(5);
    }
}
