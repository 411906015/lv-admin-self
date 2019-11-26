<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\movies;
use Encore\Admin\Layout\Content;
use Encore\Admin\Grid;


class TestController extends Controller
{

    public function sql(Content $content){

    }

    public function test(Content $content){
//        $value = movies::find(1);
//        dd($value);


        $grid = new Grid(new movies());

// 第一列显示id字段，并将这一列设置为可排序列
        $grid->column('id', 'ID')->sortable();

// 第二列显示title字段，由于title字段名和Grid对象的title方法冲突，所以用Grid的column()方法代替
        $grid->column('title');

// 第三列显示director字段，通过display($callback)方法设置这一列的显示内容为users表中对应的用户名
//        $grid->column('director')->display(function($userId) {
//            return movies::find(1)->title;
//        });

// 第四列显示为describe字段
        $grid->column('describe');

// 第五列显示为rate字段
        $grid->column('rate');

        //单个关联
//        $grid->column('movieHasPerson.name','personName');

        //多个关联
        $grid->column('hasManyPerson','many')->display(function ($hasManyPerson){
            $count = count($hasManyPerson);
            return "<span class='label label-warning'>$count</span>";
        });



// 第六列显示released字段，通过display($callback)方法来格式化显示输出
        $grid->column('released', '正在上映')->display(function ($released) {
            return $released ? '是' : '否';
        });

//        $grid->column('name')->display(function ($name) {
//            return "<span class='label'>$name</span>";
//        });


// 下面为三个时间字段的列显示
        $grid->column('release_at');
        $grid->column('created_at','上映日期');
        $grid->column('updated_at');

// filter($callback)方法用来设置表格的简单搜索框
        $grid->filter(function ($filter) {

            // 设置created_at字段的范围查询
            $filter->between('created_at', 'Created Time')->datetime();
        });

//        $grid->paginate(1);

        $grid->disableExport();
//        $grid->disableRowSelector();
//        $grid->disableColumnSelector();
//        $grid->perPages([ ]);
        return $content->body($grid);
    }
}
