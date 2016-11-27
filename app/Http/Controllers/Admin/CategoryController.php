<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /*
     * 分类列表页
     * */
    public function index(){
        $cate_info = category::all();
        $info=$this->tree($cate_info);
        return view('Admin.category.list')->with('cate_info',$info);
    }
    /*
     * 父级分类
     * */

    /**
     * @param $cate_info
     * @param int $par_id
     * @return array
     */
    public function tree($cate_info, $par_id=0){
        $info=array();
        foreach ($cate_info as $v){
            if($v['cate_pid']==$par_id){
                $v['child']=$this->tree($cate_info,$v['cate_id']);
                $info[]=$v;
            }
        }
        return $info;
    }
    /**
     * 添加分类
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::where('cate_pid',0)->get();
        $cate_info = category::all();
        $info=$this->tree($cate_info);
        return view('admin/category/add',compact('info'));
    }

    //post.admin/category  添加分类提交
    public function store(){
        $input = Input::except('_token');
        $rules=[
            'cate_name'=>'required',
        ];
        $message=[
            'cate_name.required'=>'分类名称不能为空！',
        ];
        $validator = Validator::make($input,$rules,$message);
        if($validator->passes()){
            $re=Category::create($input);
            if($re){
                return redirect('admin/category');
            }else{
                return back()->with('errors','数据库填充失败，请重试');
            }
        }else{
            return back()->withErrors($validator);
        }
    }
    //get.admin/category/{category}/edit  编辑分类
    public function edit($cate_id)
    {
        $field = category::find($cate_id);
        $data = category::where('cate_pid',0)->get();
        return view('admin.category.edit',compact('field','data'));
    }
    //put.admin/category/{category}    更新分类
    // 更新分类
    public function update($cate_id){
        $input = Input::except('_token','_method');

        $rs=category::where('cate_id',$cate_id)->update($input);
        if($rs){
            return redirect('admin/category');
        }else{
            return back()->with('errors','分类信息更新失败');
        }
    }
    //delete.admin/category/{category}   删除单个分类
    public function destroy($cate_id)
    {
        $re = Category::where('cate_id',$cate_id)->delete();
        Category::where('cate_pid',$cate_id)->update(['cate_pid'=>0]);
        if($re){
            $data = [
                'status' => 0,
                'msg' => '分类删除成功！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '分类删除失败，请稍后重试！',
            ];
        }
        return $data;
    }
}
