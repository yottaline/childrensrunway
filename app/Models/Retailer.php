<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'retailer_f_name',
        'retailer_l_name',
        'retailer_email',
        'retailer_phone',
        'retailer_approved',
        'retailer_company',
        'retailer_city',
        'retailer_country',
        'retailer_address',
        'retailer_created'
    ];

    static function fetch($id = 0, $param = null, $limit = null, $lastId = null)
    {
        $retailers = self::limit($limit);

        if($param) $retailers->where($param);

        if($lastId) $retailers->where('retailer_id', '>', $lastId);

        if($id) $retailers->where('retailer_id', $id);

        return $id ? $retailers->first() : $retailers->get();
    }

    static function submit($id, $params)
    {
        if($id) return self::where('retailer_id', $id)->update($params) ? $id : false;
        $status = self::create($params);
        return $status ? $status->id : false;
    }
}