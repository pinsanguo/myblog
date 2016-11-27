<?php

namespace App\Http\Controllers;

use App\Http\Model\article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //首页
        $art_info=article::where('arti_view','1')->get();//首页6篇文章推荐
        $art_info2=article::where('arti_view','2')->get();//首页文章推荐

        return view('Home.index',compact('art_info','art_info2'));
    }

    /*
     * 小森博客栏目
     *
     * */
    public function xiaosen(){
        return view('Home.xiaosen');
    }
    public function moodlist(){
        return view('Home.moodlist');
    }
    public function layout(){
        return view('layouts');
    }
    public function share(){
        return view('Home.share');
    }
    public function knowledge(){
        return view('Home.knowledge');
    }
    public function book(){
        return view('Home.book');
    }
    public function about(){
        return view('Home.about');
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
