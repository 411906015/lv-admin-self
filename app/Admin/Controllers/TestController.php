<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\movies;
use Encore\Admin\Form;
use Encore\Admin\Layout\Content;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Show;

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

        $grid->column('img')->display(function($userId) {
            return '/images/kj.png';
        })->image(env('APP_URL').'/upload/',50);

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
//        $grid->expandFilter();  //筛选项是否默认展示
// filter($callback)方法用来设置表格的简单搜索框
        $grid->filter(function ($filter) {
            $filter->disableIdFilter(); //是否显示ID查找
            $filter->like('title', 'title');
//            $filter->like('title', $_GET['title']);
            // 设置created_at字段的范围查询
//            $filter->between('created_at', 'Created Time')->datetime();
        });

//        $grid->paginate(1);

        $grid->disableExport();
//        $grid->disableRowSelector();
//        $grid->disableColumnSelector();
//        $grid->perPages([ ]);
        return $content->body($grid);
    }


    public function formTest(Content $content){
//echo phpinfo();die;
        $form = new Form(new movies);
        // 显示记录id
        $form->display('id', 'ID');

// 添加text类型的input框
        $form->text('title', '电影标题');

        return $content->body($form);
    }

    public function showPage(Content $content){
        $content->header('Post');
        $content->description('详情');
        $ad = movies::find(1)->toArray();
//        dd($ad);
        $content->body(Admin::show(movies::find(1), function (Show $show){
            $show->id('ID');
            $show->title('标题');
            $show->rate();
            $show->created_at();
            $show->updated_at();
            $show->release_at();
        }));
//        $content->body($ad);
        return $content;
            dd(123);
    }

    public function showForm(Content $content){
        $form = new Form(new movies);

// 显示记录id
        $form->display('id', 'ID');

// 添加text类型的input框
        $form->text('title', '电影标题');

        $directors = [
            1 => 'John',
            2 => 'Smith',
            3 => 'Kate' ,
        ];

        $form->select('director', '导演')->options($directors);

// 添加describe的textarea输入框
        $form->textarea('describe', '简介');

// 数字输入框
        $form->number('rate', '打分');

// 添加开关操作
        $form->switch('released', '发布？');

// 两个时间显示
        $form->display('created_at', '创建时间');
        $form->display('updated_at', '修改时间');
        $form->footer(function (Form\Footer $footer) {

            // 去掉`重置`按钮
            $footer->disableReset();

            // 去掉`提交`按钮
//            $footer->disableSubmit();

            // 去掉`查看`checkbox
            $footer->disableViewCheck();

            // 去掉`继续编辑`checkbox
            $footer->disableEditingCheck();

            // 去掉`继续创建`checkbox
            $footer->disableCreatingCheck();

        });
        $form->tools(function (Form\Tools $tools) {

            // 去掉`列表`按钮
            $tools->disableList();

            // 去掉`删除`按钮
            $tools->disableDelete();

            // 去掉`查看`按钮
            $tools->disableView();

            // 添加一个按钮, 参数可以是字符串, 或者实现了Renderable或Htmlable接口的对象实例
//            $tools->add('<a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;delete</a>');
        });
        return $content->body($form);
    }
}
