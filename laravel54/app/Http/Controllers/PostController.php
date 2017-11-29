<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // 列表
    public function index()
    {
        // 傳入title array:
        $posts = [
            [
                "title" => "this is title1"
            ],
            [
                "title" => "this is title2"
            ],
            [
                "title" => "this is title3"
            ]
        ];

        $topics = [];

        // return view("post/index", ["posts" => $posts]);   // 要在view 新增post/index.blade.php    , 之後可能會有第2個參數
        return view("post/index", compact("posts", "topics"));   // 因為推薦名字相同，所以推薦使用改用php的compact!!
    }

    // 某個文章詳情
    public function show()
    {
        return view("post/show", ["title" => "this is title", "isShow" => false]);    // 帶參數到view那邊顯示
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
