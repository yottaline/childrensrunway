<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'visitor_name',
        'visitor_email',
        'visitor_approved',
        'visitor_qr_code',
        'visitor_expiry'
    ];

    static function fetch($id = 0, $param = null, $limit = null, $lastId = null)
    {
        $visitors = self::limit($limit)->orderBy('visitor_id', 'DESC');

        if($param) $visitors->where($param);
        if($lastId) $visitors->where('visitor_id', '>', $lastId);
        if($id) $visitors->where('visitor_id', $id);

        return $id ? $visitors->first() : $visitors->get();
    }

    static function submit($id, $params)
    {
        if($id) return self::where('visitor_id', $id)->update($params) ? $id : false;
        $status = self::create($params);
        return $status ? $status->id : false;
    }
}