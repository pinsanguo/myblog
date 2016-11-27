<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\article;
use App\Http\Model\category;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ArticleController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=article::orderBy('arti_id','asc')->paginate(8);
        return view('Admin.Article.list',compact('info'));
    }

    public function create(){
        $cate_info= category::all();
        $info=$this->tree($cate_info);
        return view('Admin.Article.add',compact('info'));
    }
    //get.admin/Article/{category}/edit  编辑文章
    public function edit($arti_id){
        $arti_info=article::find($arti_id);
        $arti_info['arti_time']=date("Y-m-d H:i:s",$arti_info['arti_time']);
        $cate_info= category::all();
        $info=$this->tree($cate_info);
        return view('Admin.Article.edit',compact('arti_info','info'));
    }
    public function tree($cate_info,$pid=0){
        $arr=array();
        foreach($cate_info as $v){
            if($v['cate_pid']==$pid){
                $v['child']=$this->tree($cate_info,$v['cate_id']);
                $arr[]=$v;
            }
        }
        return $arr;
    }
    //put.admin/article/{category}    更新分类
    // 更新分类
    public function update($cate_id){
        $input = Input::except('_token','_method','arti_time');
        //打开可以在修改文章的时候修改时间,不修改时间
//        $input['arti_time'] = time();

        $rs=article::where('arti_id',$cate_id)->update($input);
        if($rs){
            return redirect('admin/article');
        }else{
            return back()->with('errors','分类信息更新失败');
        }
    }
    //post.admin/article  添加文章提交
    public function store(){
        $input=Input::except('_token','_method');
        $input['arti_time'] = time();
        $rules=[
            'arti_name'=>'required',
        ];
        $message=[
            'arti_name.required'=>'文章名称不能为空！',
        ];
        $validator = Validator::make($input,$rules,$message);
        if($validator->passes()){
            $re=article::create($input);
            if($re){
                return redirect('admin/article');
            }else{
                return back()->with('errors','数据库填充失败，请重试');
            }
        }else{
            return back()->withErrors($validator);
        }
    }
    //delete.admin/category/{category}   删除单个文章
    public function destroy($cate_id)
    {
        echo "aa";
    }

}
