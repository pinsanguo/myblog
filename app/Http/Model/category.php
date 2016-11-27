<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table='category';
    protected $primaryKey='cate_id';
    public $timestamps=false;
    protected $fillable = ['cate_name', 'cate_title', 'cate_keywords', 'cate_description', 'cate_view', 'cate_order', 'cate_pid'];
}
