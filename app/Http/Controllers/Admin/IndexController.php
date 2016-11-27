<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class IndexController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Admin.index');
    }

    public function info(){
        return view('Admin.info');
    }
    public function pass(){
        if($input=Input::all()){
            $rules=[
                'password'=>'required|between:6,20|confirmed',
            ];
            $message=[
                'password.required'=>'新密码不能为空',
                'password.between'=>'新密码必须在6-20个字符之间',
                'password.confirmed'=>'新密码与确认密码必须一致',
            ];
            $validator = Validator::make($input,$rules,$message);
            if($validator->passes()){
                $user=User::first();
                $_passwd=Crypt::decrypt($user->passwd);
                if($input['password_o'] == $_passwd){
                    $user->passwd=Crypt::encrypt($input['password']);
                    $user->update();
                    return back()->with('errors','修改密码成功');
                }else{
                    return back()->with('errors','原密码错误');
                }
            }else{
                return back()->withErrors($validator);
            }
        }
        return view('Admin.pass');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
