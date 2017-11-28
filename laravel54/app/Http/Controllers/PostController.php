<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // 列表
    public function index()
    {
        return view("post/index");   // 要在view 新增post/index.blade.php    , 之後可能會有第2個參數
    }

    // 某個文章詳情
    public function show()
    {
        return view("post/show");
    }

    // 創建頁面
    public function create()
    {
        return view("post/create");
    }

    // 創建邏輯    
    public function store()
    {
        return;    //還沒寫也要先';'
    }

     // 編輯頁面
    public function edit()
    {
        return view("post/edit");
    }

    // 編輯邏輯
    public function update()
    {

    }

    // 刪除邏輯
    public function delete()
    {

    }

}
