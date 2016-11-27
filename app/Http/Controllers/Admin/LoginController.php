<?php

namespace App\Http\Controllers\Admin;
use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
require_once('resources/org/code/Code.class.php');
class LoginController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if($input = INPUT::all()){
            $code = new \Code();
            $_code = $code->get();
            if(strtoupper($input['user_code']) !=$_code){
                return back()->with('msg','验证码错误！');
            }
            $user = USER::first();
            if($user->user_name!=$input['user_name'] || Crypt::decrypt($user->passwd)!=$input['user_pass']){
                return back()->with('msg','用户名或者密码错误');
            }
            session(['user'=>$user]);
            return redirect('admin/index');
        }
        return view('Admin.login');
    }

    public function quit(){
        session(['user'=>null]);
        return redirect('admin/login');
    }
    public function code(){
        $code = new \Code;
        $c=$code->make();
        echo $c;
    }

    public function getcode(){
//        $user=User::first();
//        dd($user);
        //laravel 加密的使用
        $str="123456";
        echo Crypt::encrypt($str);
        $str1="eyJpdiI6Ik1vVlpheW1mR25BMTVFeWtRd1k1dVE9PSIsInZhbHVlIjoiSXlvT1I2dXdsN2tSazgzbWFkMmRTQT09IiwibWFjIjoiZTNjMTdhMjM5NzM4ZjU5YWEwZDU1MTQ3NTNiNWViZTE0OTM3Nzk0YjcxYzYxN2Y1MmVhMTVmY2Q5NzNiOTRkMyJ9";
        echo "<hr/>";
        echo Crypt::decrypt($str1);
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
