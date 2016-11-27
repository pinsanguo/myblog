<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $table='article';
    protected $primaryKey='arti_id';
    public $timestamps=false;
    protected $fillable = ['arti_name','arti_detail','arti_view', 'arti_cate', 'arti_time', 'arti_order', 'arti_content', 'arti_user', 'arti_click', 'arti_common', 'arti_state','arti_img'];
    protected $guarded=[];
}
