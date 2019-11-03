<?php


namespace app\admin\controller;

use app\base\controller\Admin;

class Index extends Admin
{

    // 后台首页
    public function index()
    {

        return view('admin/index');
    }
}